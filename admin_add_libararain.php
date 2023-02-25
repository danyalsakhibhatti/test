<html>
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
    
          <h2>Add Libarain</h2>
          <form>
            <div class="mb-3">
             <label class="form-label">Name:</label>
             <input type="text" class="form-control" placeholder="Enter Name"/>
            </div>
            <div class="mb-3">
             <label class="form-label">Contact #:</label>
             <input pattern="[0-9]{11}" type="text" class="form-control" placeholder="Enter Contact Number"/>
             <small class="form-text">For Example:03145678439</small>
            </div>
             <div class="mb-3">
             <label class="form-label">Address:</label>
             <textarea class="form-control" placeholder="Enter Residence Address"></textarea>
            </div>
             <div class="mb-3">
             <label class="form-label">CNIC:</label>
             <input pattern="[0-9]{13}" type="text" class="form-control" placeholder="Enter CNIC Number"/>
             <small class="form-text">For Example:0000123421342</small>
            </div>
            <div class="mb-3">
             <input class="form-check-input" type="radio" name="gender">
             <label class="form-check-label">Male:</label>
            </div>
             <div class="mb-3">
             <input class="form-check-input" type="radio" name="gender">
             <label class="form-check-label">Female:</label>
            </div>
             <div class="mb-3">
             <label class="form-label">Email:</label>
             <input class="form-control" type="Email" placeholder="Email">
              </div>
             <div class="mb-3">
             <label class="form-label">Choose Password:</label>
             <input class="form-control" type="password" placeholder="Choose New Password">
              </div>
             <input class="btn btn-success" type="submit" value="ADD Libarain"/>
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