<?php
include ('config.php');
if(isset($_POST['submit'])){
    $class_id = $POST['class_id'];
    $section_id = $POST['section_id'];
    $year = $POST['year'];
    
    $student_id = $POST['student_id'];
    
    
    
    foreach ($student_id as $key=>$val){
    
        $std_id= $val;
        $query = "INSERT into student_reg(class_id,section_id, student_id,year) VALUES($class_id,$section_id,$std_id,'$year')";
        if(mysqli_query($connection,$query)){
            $query = "UPDATE student SET class= $class_id where id = $std_id";
            if(mysqli_query($connection,$query)){
                echo "Registered Successfully";
            }
            else{
                echo "Error while updating class";
            }
        }else{
            echo "Error";
        }
        
    }
}


$query = "SELECT * FROM class";
$result1 = mysqli_query($connection,$query);

$query1 = "SELECT * FROM section";
$result2 = mysqli_query($connection,$query1);

$query2 = "SELECT * FROM student JOIN class ON class.id = student.class";
$result3 = mysqli_query($connection,$query2);
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

    <title>Student Class Registration | Web Based College Portal</title>
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
    
          <h2>Student Class Registration</h2>

          <div class="card my-3">
            <div class="card-body">
                <form class="row" action="#" method="post">
                  <div class="col-lg-1">
                    <label class="form-label"> Class:</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="class_id" class="form-select">
                        <?php while($row = mysqli_fetch_array($result1)) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['title'];?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="col-lg-1">
                    <label class="form-label"> Section:</label>
                  </div>
                  <div class="col-lg-3">
                    <select name="section_id" class="form-select">
                        <?php while($row = mysqli_fetch_array($result2)) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['title'];?></option>
                        <?php } ?>
                    </select>
                  </div>
                 <div class="col-lg-1">
                   <label class="form-label">Year</label>
                 </div>
                 <div class="col-lg-2">
                   <input type="text" name="year"  placeholder="Year" class="form-control"/>
                 </div>
                    
                    <table class="mt-3 table table-hover table-bordered">
           
              <thead>
                <tr>
                  <th>Check / Uncheck</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>class</th>
                </tr>
              </thead>
              <tbody>
                  <?php while($s_data = mysqli_fetch_array($result3)) { ?>
                  <tr>
                      <td><input type="checkbox" name="student_id[]" value="<?php echo $s_data['id'] ?>" /></td>
                     <td><?php echo $s_data['id'];?></td>
                    <td><?php echo $s_data['name'];?></td>
                    <td><?php echo $s_data['title'];?></td>
                 </tr>
                  <?php } ?>
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