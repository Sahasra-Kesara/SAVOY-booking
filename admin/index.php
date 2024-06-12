<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
      body {
        background-color: #f8f9fa;
      }
      .navbar, .sidebar {
        background-color: #343a40;
      }
      .navbar-brand, .nav-link, .sidebar a {
        color: #343a40;
      }
      .table {
        margin-top: 20px;
      }
      .table th, .table td {
        text-align: center;
        vertical-align: middle;
      }
      .table-responsive {
        margin-top: 20px;
      }
      .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        padding-top: 60px; /* Adjusted for navbar height */
      }
      .container-fluid {
        margin-left: 250px;
      }
    </style>

    <?php 
    session_start();  
    if (!isset($_SESSION['admin'])) {
      header("location:login.php");
    }

    include "./templates/top.php"; 
    ?>
  </head>
  <body>
    <?php include "./templates/navbar.php"; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include "./templates/sidebar.php"; ?>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <h2>Total Admins</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include_once 'Database.php';
                $result = mysqli_query($conn,"SELECT * FROM admin");

                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['is_active'];?></td>
                    </tr>
                    <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <?php include "./templates/footer.php"; ?>

    <!-- JavaScript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/admin.js"></script>
  </body>
</html>
