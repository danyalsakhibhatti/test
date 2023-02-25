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

    <title>Teacher Add Exam|Web Based Collage Portal</title>
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
    
          <h2>Add Exam Questions</h2>
          <div class="card">
              <div class="card-body">
                <div class="col-lg-12">
                    <form class="row">
                        <div class="col-lg-2">
                          <label class="form-label">Enter Number of Questions:</label>
                        </div>
                        <div class="col-lg-4">
                          <input type="number" class="form-control"/>
                        </div>
                        <div class="col-lg-2">
                          <input type="submit" value="Generate" class="btn btn-success"/>
                        </div>
                      
                    </form>
                </div>
                <hr>

                <form class="row">

                  <div class="mb-3">
                     <label class="form-label">Enter Question 1:</label>
                     <input type="text" class="form-control"/>
                  </div>
                  <div class="mb-3 align-items-center d-flex flex-column flex-md-row">
                    <label class="form-label col-lg-1">Enter Options:</label>
                    <input type="text" class="form-control m-2" placeholder="Option A"/>
                    <input type="text" class="form-control m-2" placeholder="Option B"/>
                    <input type="text" class="form-control m-2" placeholder="Option C"/>
                    <input type="text" class="form-control m-2" placeholder="Option D"/>
                 </div>

                 <hr>
              <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Send"/>
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