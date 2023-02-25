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

    <title>Student Dashboard |Web Based College Portal</title>
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
    
          <h2>Attempt Weekly Test</h2>
          <form>

          <div class="card my-2">
              <div class="card-body">
                    <div><label class="form-label">Question: This is question text.</label></div>
                      <div class="mb-3 form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="q1"/>A) option 1
                      </div>
                      <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q1"/>B) option 2
                    </div>
                    <div class="mb-3 form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="q1"/>C) option 3
                  </div>
                  <div class="mb-3 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1"/>D) option 4
                </div>
              </div>
          </div>

          <div class="card my-2">
            <div class="card-body">
                  <div><label class="form-label">Question: This is question text.</label></div>
                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q1"/>A) option 1
                    </div>
                    <div class="mb-3 form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="q1"/>B) option 2
                  </div>
                  <div class="mb-3 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1"/>C) option 3
                </div>
                <div class="mb-3 form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1"/>D) option 4
              </div>
            </div>
        </div>

        <div class="card my-2">
          <div class="card-body">
                <div><label class="form-label">Question: This is question text.</label></div>
                  <div class="mb-3 form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="q1"/>A) option 1
                  </div>
                  <div class="mb-3 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="q1"/>B) option 2
                </div>
                <div class="mb-3 form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1"/>C) option 3
              </div>
              <div class="mb-3 form-check form-check-inline">
                <input class="form-check-input" type="radio" name="q1"/>D) option 4
            </div>
          </div>
      </div>
          

        <input type="submit" class="btn btn-success" value="Submit Test"/>
        </form>
<?php
  include('backend_footer.php');
  ?>
        </main>
      </div>
  
       

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>

      </div>
  </body>
</html>