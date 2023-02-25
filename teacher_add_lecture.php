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

    <title>Add Lecture | Web Based College Portal</title>
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
            <h1 class="h2">Teacher's Dashboard</h1>
          </div>
    
          <h2>Add Lecture</h2>
          <div class="card">
              <div class="card-body">
                <form class="row">
                  <div class="mb-3">
                     <label class="form-label h4">Lecture Title:</label>
                     <input type="text" class="form-control"/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label h4">Lecture Description:</label>
                    <textarea class="form-control"></textarea>
                 </div>
                 <div class="mb-3 col-lg-6">
                  <label class="form-label h4">Select Class:</label>
                  <select class="form-select">
                    <option>9th</option>
                    <option>10th</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                  </select>
               </div>
               <div class="mb-3 col-lg-6">
                <label class="form-label h4">Select Subject:</label>
                <select class="form-select">
                  <option>Maths</option>
                  <option>Physics</option>
                  <option>Chemistry</option>
                  <option>English</option>
                </select>
             </div>
             <div class="mb-3 col-lg-6">
              <label class="form-label h4">Add Youtube Video Link:</label>
              <input type="url" class="form-control"/>
             </div>
             <div class="mb-3 col-lg-6">
              <label class="form-label h4">Attach File:</label>
              <input type="file" class="form-control"/>
             </div>
              <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Add Lecture"/>
              </div>
              </form>
              </div>
          </div>
          

        </main>
      </div>
            <?php
  include('backend_footer.php');
  ?>

       

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>
      </div>
   
  </body>
</html>