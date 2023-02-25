<?php
include ('config.php');

if(isset($_GET['id'])){
    $student_id= $_GET['id'];
} else {
    header('Location: admin_view_student.php');
}
if(isset ($_POST['update'])){
   $name= $_POST['name'];
   $fathername= $_POST['fathername'];
   $rollno= $_POST['rollno'];
   $contact= $_POST['contact'];
   $address= $_POST['address'];
   $cnic= $_POST['cnic'];
   $email= $_POST['email'];
   $password= $_POST['password'];
   $gender= $_POST['gender'];
   $query = "UPDATE student SET name ='$name',fathername ='$fathername',rollno ='$rollno',contact ='$contact',address ='$address',cnic = '$cnic',gender = '$gender',email ='$email',password ='$password' WHERE id = $student_id";
  if(mysqli_query($connection,$query)){
     $message= "Record update Successfully";
  }
    else{
       echo "Error: ".mysqli_error($connection);
    }
}
$query ="SELECT * FROM student WHERE id = $student_id";
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
    <p><?php
       // echo $message;
        ?></p>
          <h2>EDIT Student</h2>
          <form action="#" method="post">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $row['name'] ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Father Name:</label>
                <input type="text" class="form-control" placeholder="Enter Father Name" name="fathername" value="<?php echo $row['fathername'] ?>"/>
            </div>
            <div class="mb-3">
              <label class="form-label">Roll #:</label>
              <input type="text" class="form-control" placeholder="Enter Roll #" name="rollno" value="<?php echo $row['rollno'] ?>"/>
          </div>
        <div class="mb-3">
          <label class="form-label">Contact #:</label>
          <input pattern="[0-9]{11}" type="text" class="form-control" placeholder="Enter Contact Number" name="contact" value="<?php echo $row['contact'] ?>"/>
          <small class="form-text">For Example : 034512346567</small>
        </div>

        <div class="mb-3">
          <label class="form-label">Address:</label>
          <textarea class="form-control" placeholder="Enter Residence Address" name ="address"  ><?php echo $row['address'] ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">CNIC #:</label>
          <input pattern="[0-9]{13}" type="text" class="form-control" placeholder="Enter CNIC Number" name="cnic" value="<?php echo $row['cnic'] ?>"/>
          <small class="form-text">For Example : 0000111222333</small>
        </div>
           <label class="form-label">Gender:</label>   
        <div class="mb-3 ">
          <input class="form-check-input" type="radio" value="Male" 
                 <?php
                // echo (condition?'true':'false');
                // echo ($row['gender'] == 'Male'?'checked':'');
                 
                 if($row['gender'] == 'Male') {
                     echo 'checked';
                 }
                 
                       
                       
                 
                 ?> 
                 name="gender">
          <label class="form-check-label">Male</label>
        </div>

        <div class="mb-3">
          <input class="form-check-input" type="radio" value="Female" 
                 <?php
                 
                 if($row['gender'] == 'Female') {
                     echo 'checked';
                 }
                 
                 ?>
                 name="gender">
          <label class="form-check-label">Female</label>
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input class="form-control" type="Email" placeholder="Enter Email" name="email" value="<?php echo $row['email'] ?>"/>
        </div>

        <div class="mb-3">
          <label class="form-label">Choose Password:</label>
          <input class="form-control" type="password" placeholder="Choose New Password" name="password" value="<?php echo $row['password'] ?>"/>
        </div>

        <input class="btn btn-success" type="submit" value="UPDATE STUDENT" name="update"/>

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