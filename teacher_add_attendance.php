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

    <title>Student Attendance | Web Based College Portal</title>
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
            <h1 class="h2">Teachers's Dashboard</h1>
          </div>
    
          <h2>Student Attendance</h2>

          <div class="card my-3">
            <div class="card-body">
                <form class="row" action="#" method="post">
                  <div class="col-lg-1">
                    <label class="form-label"> Class:</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="class_id" class="form-select">
                        <option value="1">Subject</option>
                      </select>
                  </div>
                 <div class="col-lg-1">
                   <label class="form-label">Date</label>
                 </div>
                 <div class="col-lg-2">
                   <input type="text" name="date"  placeholder="Date" class="form-control"/>
                 </div>
                    
                    <table class="mt-3 table table-hover table-bordered">
           
              <thead>
                <tr>
                  <th>Check / Uncheck</th>
                  <th>ID</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><input type="checkbox" checked name="student_id[]" value="1" /></td>
                     <td>1</td>
                    <td>Ali</td>
                 </tr>
                  <tr>
                      <td><input type="checkbox" checked name="student_id[]" value="1" /></td>
                     <td>1</td>
                    <td>Anees</td>
                 </tr>
                  <tr>
                      <td><input type="checkbox" checked name="student_id[]" value="1" /></td>
                     <td>1</td>
                    <td>Ahmed</td>
                 </tr>
                  <tr>
                      <td><input type="checkbox" checked name="student_id[]" value="1" /></td>
                     <td>1</td>
                    <td>Jameel</td>
                 </tr>
              </tbody>

          </table>

                    
          <div class="col-lg-12">
             <input type="submit" name="submit" class="btn btn-success" id=""/>
          </div>

        </form>
                    
                    
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