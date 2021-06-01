<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php'); ?>
  </head>
  <body>
    
      <!-- Top Navbar -->
      <?php include('includes/nav.php'); ?>
    <!-- END Top Navbar -->

    <!-- Sidebar -->
    <?php include('includes/sidebar.php'); ?>
    <!-- END Sidebar-->
      <div id="main">
        
      <div class="d-flex justify-content-center pt-5">
<div class="col-md-6">
<h2>Add New Course</h2>
<form action="/action_page.php">
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
    
    <button type="submit" class="btn btn-dark mt-4 "> Add Course </button>
  </form>
</div>
      </div>
      </div>
      
      <script>
      function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

     
      </script>
      

    
  </body>
</html>