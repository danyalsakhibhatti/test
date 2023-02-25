<?php
include('config.php');
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password=$_POST['password'];
   
    $query="SELECT * FROM student where email='$email' AND password='$password'";
    $result =mysqli_query($connection,$query);
    if (mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $_SESSION['student_id']=$row['id'];
        $_SESSION['user_type']='Student';
        header('Location: student_profile.php');
    }else
       { 
        echo "wrong Email or Password.";
       }
}
?>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
     <script src="js/bootstrap.bundle.js"></script>
     <link rel="stylesheet" type="text/css" href="CSS/style.css">
     <title>Add Student|Web Based College Portal</title>
    
    
 </head>
    <body>
      <?php
  include('frontend_header.php');
  ?>
        <section id = "bg-section">
        <div class ="container h-100">
         <div class="row h-100 align-items-center justify-content-center">
          <div class="col-md-6">
            <form class="shadow bg-light p-5" action="login.php" method="post">
                <h2>User Login:</h2>
                <div class="mb-3">
                 <label class="form-label">Email:</label>
                 <input type="email" class="form-control" name="email" />
                </div>
                <div class="mb-3">
                 <label class="form-label">Password:</label>
                 <input type="password" class="form-control" name="password"/>
                </div>
                 <div class="mb-3">
                 <label class="form-label"></label>
                 <input type="submit" class="btn btn-success" value="LOGIN HERE" name="login"/>
                </div>
            </form>
          </div>
         </div>
        </div>
 </section>
          <?php
  include('frontend_footer.php');
  ?>
 </body>
</html>