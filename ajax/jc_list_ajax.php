<?php
  require_once '../config.php';

if($_POST['id_class'])
{
	$id_class      = $_POST["id_class"];

// 	$query = $mysqli->query("SELECT * FROM car WHERE id=".$id);
// 	$myrow = $query->fetch_assoc();

        echo "

        <div class='modal-content'>
          <!-- NI 15-07-2021 begin -->

               <!-- Modal Header -->
               <div class='modal-header'>
                 <h4 class='modal-title' style='color:black'>
                   <p></p>
                   <p id='hc'></p>
                 </h4>
                 <button type='button' class='close' data-dismiss='modal' (click) = 'hide()'>&times;</button>
               </div>

               <!-- Modal body -->
               <!-- <input type='hidden' name='id_class' id='id_class' value=''> -->
               <!-- <input name='id_class_text' id='id_class_text' value=''> -->
             <div class='modal-body' style='color:black'>
                 <p></p>

                 <form class='user_action_form'>

                     <div class='form-group row'>
                         <label for='s1' style='color:black' class='col-md-4 col-form-label text-md-right'>List of coaches:</label>
                         <div class='col-md-6'>

                  ";
                  // get available coaches
                  // event_type.val();
                  $query = "SELECT a.id_user, u.first_name, u.last_name FROM availability a JOIN users u ON a.id_user = u.id_user WHERE a.id_class='$id_class'";
                  $list_result = dbQuery($query);
                  echo "
                 <select class='form-select' name='s1' id='s1'>
                     <option value='0'> - Select - </option>";

                        while($row_user = dbFetchAssoc($list_result)) {
                          extract($row_user);
                            $selected = false;
                            // $selected = $id_user == $myrow['id_user']) ? ' selected' : '';
                          echo "<option>" . $first_name . " " . $last_name . "</option>";
                        }
                  echo "
                 </select>
                 <select class='form-select' name='s2' id='s2'>
                     <option value='0'> - Select - </option>";

                        mysqli_data_seek($list_result,0);
                        while($row_user = dbFetchAssoc($list_result)) {
                          extract($row_user);
                            $selected = false;
                          echo "<option>" . $first_name . " " . $last_name . "</option>";
                        }
                  echo "
                 </select>
                 <select class='form-select' name='s3' id='s3'>
                     <option value='0'> - Select - </option>";

                        mysqli_data_seek($list_result,0);
                        while($row_user = dbFetchAssoc($list_result)) {
                          extract($row_user);
                            $selected = false;
                          echo "<option>" . $first_name . " " . $last_name . "</option>";
                        }
                  echo "
                 </select>
                 <select class='form-select' name='s4' id='s4'>
                     <option value='0'> - Select - </option>";

                        mysqli_data_seek($list_result,0);
                        while($row_user = dbFetchAssoc($list_result)) {
                          extract($row_user);
                            $selected = false;
                          echo "<option>" . $first_name . " " . $last_name . "</option>";
                        }
                  echo "
                 </select>
             </div>
         </div>
        </form>
               </div>

               <!-- Modal footer -->
               <div class='modal-footer'>
                 <button type='button' class='btn btn-info' data-dismiss='modal' (click) = 'hide()'>Close</button>
               </div>

             </div>
        ";
}

?>
