<?php
include('config.php');
if(isset($_SESSION['employee_id'])){
    $employee_id = $_SESSION['employee_id'];
}else{
    header('Location:employee_login.php');
}
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE employee SET name='$name',contact='$contact',address='$address',cnic='$cnic',gender='$gender',email='$email',password='$password' WHERE id= $employee_id";
    if(mysqli_query($connection,$query)){
        echo "Record Update Successfully";
    }else{
        "Error";
    }
}
$query = "SELECT * FROM employee WHERE id=$employee_id";
$data = mysqli_query($connection,$query);
$row = mysqli_fetch_array($data);
?>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
     <script src="js/bootstrap.bundle.js"></script>
     <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <title>Edit Employee Profile|Web Based College Portal</title>
    
 </head>
    <body>
          <?php
  include('frontend_header.php');
  ?>
        
        <section>
        <div class="py-5"></div>
        <div class ="container">
         <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 col-md-12">
            <form action="edit_teacher_profile" method="post"class="shadow bg-light rounded-3 p-5">
                <h3>Edit Employee Profile:</h3>
                <div class="mb-3">
                 <label class="form-label">Name:</label>
                 <input type="text" class="form-control" placeholder="Enter Name"  value="<?php echo $row['name'] ?>" name ='name'/>
                </div>
                <div class="mb-3">
                 <label class="form-label">Contact #:</label>
                 <input pattern="[0-9]{11}" type="text" class="form-control" placeholder="Enter Contact Number" value="<?php echo $row['contact'] ?>" name ='contact'/>
                 <small class="form-text">For Example:03145678439</small>
                </div>
                 <div class="mb-3">
                 <label class="form-label">Address:</label>
                 <textarea class="form-control" placeholder="Enter Residence Address" name ='address'><?php echo $row['address'] ?></textarea>
                </div>
                 <div class="mb-3">
                 <label class="form-label">CNIC:</label>
                 <input pattern="[0-9]{13}" type="text" class="form-control" placeholder="Enter CNIC Number" value="<?php echo $row['cnic'] ?>" name ='cnic'/>
                 <small class="form-text">For Example:0000123421342</small>
                </div>
                <label class="form-label">Gender: </label>
                <div class="mb-3">
                 <input class="form-check-input" type="radio" value="Male" <?php  if($row['gender'] == 'Male') {
                     echo 'checked';
                 }
                           
                 ?> name="gender">
                 <label class="form-check-label">Male:</label>
                </div>
                 <div class="mb-3">
                 <input class="form-check-input" type="radio" value="Female"  <?php   if($row['gender'] == 'Female') {
                     echo 'checked';
                 }
                           
                 ?> 
                 name="gender">
                 <label class="form-check-label">Female:</label>
                </div>
                 <div class="mb-3">
                 <label class="form-label">Email:</label>
                 <input class="form-control" type="Email" placeholder="Email" value="<?php echo $row['email'] ?>" name ='email'>
                  </div>
                 <div class="mb-3">
                 <label class="form-label">Choose Password:</label>
                 <input class="form-control" type="password" placeholder="Choose New Password"  value="<?php echo $row['password'] ?>" name ='password'>
                  </div>
                 <input class="btn btn-success" type="submit" value="UPDATE" name ='update'/>
            </form>
          </div>
         </div>
        </div>
         <div class="py-5"></div>
 </section>
            <?php
  include('frontend_footer.php');
  ?>
 </body>
</html>