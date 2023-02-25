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

    <title>Parent dashbord | Web Based College Portal</title>
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
            <h1 class="h2">parent's Dashboard</h1>
          </div>
    
          <h2 class="display-4 py-3">My Profile</h2>
         
          <div class="card">
            <div class="row">
              <div class="col-lg-3 p-5">
                  <img class="img-fluid rounded-start" src="images/avatar.png"/>

              </div>

              <div class="col-lg-9 pt-5">
                <div class="card-body">
                  <div class="card-title">
                      <h3>Name:Ahmed</h3>
                      <hr>
                      <span class="lead">Contact : 0215498489 </span> <hr> <span class="lead">Address: House # 124, Sector A453, City, Country</span>
                      <hr>
                      <span class="lead">CNIC: 25483369874-2</span> <hr> <span class="lead">Email: abc@gmail.com</span>
                  </div>
              </div>
  
              </div>

            </div>
            
            
          </div>
          

        </main>
      </div>
                 <?php
  include('backend_footer.php');
  ?>
       
      </div>
       

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>

   
  </body>
</html>