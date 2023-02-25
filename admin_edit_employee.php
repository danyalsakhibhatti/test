<?php
include ('config.php');

if(isset($_GET['id'])){
    $employee_id= $_GET['id'];
}
else {
    header('Location: admin_view_faculty.php');
}
if(isset ($_POST['update'])){
   $name= $_POST['name'];
   $contact= $_POST['contact'];
   $address= $_POST['address'];
   $cnic= $_POST['cnic'];
   $email= $_POST['email'];
   $password= $_POST['password'];
   $gender= $_POST['gender'];
   $query = "UPDATE employee SET name ='$name',contact ='$contact',address ='$address',cnic = '$cnic',email ='$email',password ='$password',gender ='$gender' WHERE id = $employee_id";
 
  if(mysqli_query($connection,$query)){
     $message= "Record update Successfully";
  }
    else{
       echo "Error: ".mysqli_error($connection);
    }
}
$query ="SELECT * FROM employee WHERE id = $employee_id";
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
    <p>
        <?php
       // echo $message;
        ?>
            </p>
          <h2>Edit Employee</h2>
          <form action="#" method="post">
            <div class="mb-3">
             <label class="form-label">Name:</label>
             <input type="text" class="form-control" placeholder="Enter Name"  value="<?php echo $row['name'] ?>"name="name"/>
            </div>
            <div class="mb-3">
             <label class="form-label">Contact #:</label>
             <input pattern="[0-9]{11}" type="text" class="form-control" placeholder="Enter Contact Number"  value="<?php echo $row['contact'] ?>" name="contact"/>
             <small class="form-text">For Example:03145678439</small>
            </div>
             <div class="mb-3">
             <label class="form-label">Address:</label>
             <textarea class="form-control" placeholder="Enter Residence Address" name="address"><?php echo $row['address'] ?></textarea>
            </div>
             <div class="mb-3">
             <label class="form-label">CNIC:</label>
             <input pattern="[0-9]{13}" type="text" class="form-control" placeholder="Enter CNIC Number" value="<?php echo $row['cnic'] ?>" name="cnic"/>
             <small class="form-text">For Example:0000123421342</small>
            </div>
              <label class="form-label">Gender:</label>
            <div class="mb-3">
             <input class="form-check-input" type="radio" value="Male"  <?php
                 if($row['gender'] == 'Male') {
                     echo 'checked';
                 } 
                 ?> name="gender"> 
             <label class="form-check-label">Male:</label>
            </div>
             <div class="mb-3">
             <input class="form-check-input" type="radio" value="Female"  <?php
                 if($row['gender'] == 'female') {
                     echo 'checked';
                 }
                           
                 ?> 
                 name="gender"> 
             <label class="form-check-label">Female:</label>
            </div>
             <div class="mb-3">
             <label class="form-label">Email:</label>
             <input class="form-control" type="Email" placeholder="Email" value="<?php echo $row['email'] ?>" name="email">
              </div>
             <div class="mb-3">
             <label class="form-label">Choose Password:</label>
             <input class="form-control" type="password" placeholder="Choose New Password"  value="<?php echo $row['password'] ?>" name="password">
              </div>
             <input class="btn btn-success" type="submit" value="EDIT TEACHER" name="update"/>
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