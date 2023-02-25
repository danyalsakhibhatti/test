<?php
include ('config.php');
$query = "SELECT * FROM section";
$result = mysqli_query($connection,$query);
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
    
          <h2>View Group</h2>
            <form>
          <table class="table table-hover table-bordered">
           
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                </tr>
              </thead>
              <tbody>
                         <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td> <a target="_blank" href="admin_edit_group.php?id=<?php echo $row['id'] ?>" class="btn btn-success" >Edit</a>
                     
                     </td>
                </tr>
                <?php } ?>
                
              </tbody>

          </table>
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