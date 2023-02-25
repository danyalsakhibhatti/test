<?php
include ('config.php');

if(isset($_GET['id'])){
    $class_id= $_GET['id'];
}
else {
    header('Location: admin_view_class.php');
}
if(isset ($_POST['update'])){
   $title= $_POST['title'];
   $query = "UPDATTE class SET title =$'title' WHERE id = $class_id";
  if(mysqli_query($connection,$query)){
     $message= "Record update Successfully";
  }
    else{
       echo "Error";
    }
}
$query ="SELECT * FROM class WHERE id = $class_id";
$data = mysqli_query($connection,$query);
$row = mysqli_fetch_array($data);
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
            <div class="alert alert-primary">
                <?php
       // echo $message;
       ?>
            </div>
          <h2>Edit class</h2>
          <form action="admin_add_class.php" method="post">
            <div class="mb-3">
             <label class="form-label">Title:</label>
             <input type="text" class="form-control" placeholder="Enter Class"  value="<?php echo $row['title'] ?>"name="title"/>
            </div>
             <input class="btn btn-success" type="submit" value="UPDATE CLASS" name="insert"/>
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