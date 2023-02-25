<?php
include ('config.php');
$message= '';
if(isset ($_POST['insert'])){
   $title= $_POST['title'];
   $connection = mysqli_connect('localhost','root','','webbased_college_system');
   $query = "INSERT into section (title) VALUES ('$title')";
    echo $query;
  if( mysqli_query($connection,$query)){
     $message= "Record Inserted Successfully";
  }
    else{
       $message= "Error".mysqli_error($connection);
    }
}
   
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
      <div class="alert alert-primary"><?php
        echo $message;
        ?></div>
          <h2>Add Group</h2>
          <form action="admin_add_group.php" method="post">
            <div class="mb-3">
             <label class="form-label">Title:</label>
             <input type="text" class="form-control" placeholder="Enter Group" name="title"/>
            </div>
             <input class="btn btn-success" type="submit" value="ADD GROUP" name="insert"/>
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