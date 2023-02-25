<?php
include ('config.php');
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Student Dashboard | Web Based College Portal</title>
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
            <h1 class="h2">Student's Dashboard</h1>
          </div>
    
          <h2>Download Fee Challan</h2>
            <form>
          <table class="table table-hover table-bordered">
           
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Month</th>
                  <th>Download Fee Challan</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                     <td>
                     </td>
                       <td>
                     </td>
                       <td> <input type="submit" value="Download" class="btn btn-success" id=""/>
                     </td>
                  </tr>
              </tbody>

          </table>

        </form>

         
         <?php
  include('backend_footer.php');
  ?>

        </main>
      </div>

       
      </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>

   
  </body>
</html>