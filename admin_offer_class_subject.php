<?php
include ('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Admin Dashboard | Web Based College Portal</title>
  </head>
  <body>
      <?php
  include('backend_header.php');
  ?>
    
    <div class="container-fluid">
      <div class="row">
         <?php
  include('navbar.php');
  ?>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Admin's Dashboard</h1>
          </div>
    
          <h2>Offer Class Subject</h2>
          <form class="bg-light rounded-3 p-5">
          <div class="mb-3">
            <label class="form-label">Offered Class:</label>
            <select class="form-select">
              <option>Class NAme -> Section Name - 2021</option>
              <option>10th - Sciences - 2021</option>
              <option>10th - Arts - 2021</option>
            </select>
        </div>
          <div class="mb-3">
            <label class="form-label">Subject:</label>
            <select class="form-select">
              <option>English</option>
            </select>
        </div>
          <div class="mb-3">
            <label class="form-label">Teacher:</label>
            <select class="form-select">
              <option>Ali</option>
            </select>
        </div>


        <input class="btn btn-success" type="submit" value="ADD"/>

        </form>
        
        </main>
      </div>
        <div></div>
        
         <?php
  include('backend_footer.php');
  ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>
      </div>
   
  </body>
</html>