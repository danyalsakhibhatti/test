<?php
include('config.php');
if(isset($_SESSION['student_id'])){
    $student_id = $_SESSION['student_id'];
}else{
    header('Location:login.php');
}
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $rollno = $_POST['roll'];
    $class = $_POST['class'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE student SET name='$name',fathername='$fathername',rollno='$rollno',class='$class',contact='$contact',address='$address',cnic='$cnic',gender='$gender',email='$email',password='$password' WHERE id= $student_id";
    if(mysqli_query($connection,$query)){
        echo "Record Update Successfully";
    }else{
        "Error";
    }
}
$query = "SELECT * FROM student WHERE id=$student_id";
$data = mysqli_query($connection,$query);
$row = mysqli_fetch_array($data);
?>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
     <script src="js/bootstrap.bundle.js"></script>
     <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <title>Edit student Profile|Web Based College Portal</title>
    
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
            <form  action="edit_student_profile.php" method="post" class="shadow bg-light rounded-3 p-5">
                <h3>Edit student Profile:</h3>
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
            <label class="form-label">Class:</label>
            <select class="form-select" name="class">
              <option value="1">9th</option>
              <option value="2">10th</option>
              <option value="3">11th</option>
              <option value="4">12th</option>
            </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Contact #:</label>
          <input pattern="[0-9]{11}" type="text" class="form-control" placeholder="Enter Contact Number" name="contact" value="<?php echo $row['contact'] ?>"/>
          <small class="form-text">For Example : 034512346567</small>
        </div>

        <div class="mb-3">
          <label class="form-label">Address:</label>
          <textarea class="form-control" placeholder="Enter Residence Address" name ="address" > <?php echo $row['address']; ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">CNIC #:</label>
          <input pattern="[0-9]{13}" type="text" class="form-control" placeholder="Enter CNIC Number" name="cnic" value="<?php echo $row['cnic'] ?>"/>
          <small class="form-text">For Example : 0000111222333</small>
        </div>
           <label class="form-label">Gender:</label>   
        <div class="mb-3 ">
          <input class="form-check-input" type="radio" value="Male" name="gender">
          <label class="form-check-label">Male</label>
        </div>

        <div class="mb-3">
          <input class="form-check-input" type="radio" value="Female" name="gender">
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
                 <input class="btn btn-success" type="submit" value="UPDATE" name="update"/>
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