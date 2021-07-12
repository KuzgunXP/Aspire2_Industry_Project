<?php
// STD702 s00009622 Natalia Iudina 12.07.2021
?>


  <form action="<?php echo WEB_ROOT; ?>api/process.php?cmd=course" method="post">
    <div class="form-group pt-3">
      <label for="fname">Course Name</label>
      <input type="text" class="form-control" id="cname" placeholder="Enter Course Name" name="cname">
    </div>
    <div class="form-group pt-3">
      <label for="sdate">Start Date</label>
      <input type="date" class="form-control" id="sdate"  name="sdate">
    </div>
    <div class="form-group pt-3">
      <label for="edate">End Date</label>
      <input type="date" class="form-control" id="edate" name="edate">
    </div>

    <div class="form-group pt-3">
    <label for="colorpicker">Select Course Color</label>
      <span class="d-flex "><input class="colorPicker" type='color' id='colorPicker' value="#FFC817"></span>
    </div>
		<button type="submit" class="btn add_new_course p-2"> Add Course<i class="fas fa-plus p-2 "></i> </button>
  </form>
