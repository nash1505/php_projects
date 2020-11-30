
<?php
require_once 'conn.php';
$stmt_selecte=$conn->prepare('SELECT * FROM npe');
$executede=$stmt_selecte->execute(); 
$row_selecte=$stmt_selecte->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script  type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />


</head>
<body>

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
          Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">new_releases</i>
              <p>Latest News</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">store</i>
              <p>Buisness News</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="technology.php">
              <i class="material-icons">mobile_screen_share</i>
              <p>Technology</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="entertainment.php">
              <i class="material-icons">movie</i>
              <p>Entertainment</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <a href="editE.php"><button type="button">ADD</button></a>
          <div class="row">
            
            
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Entertainment News</h4>
                  <p class="card-category"></p>
                </div>

                <div class="card-body table-responsive">
                  <table class="table table-hover" cellpadding="5px" cellspacing="5px" width="100%" align="center" border="2px">
                    <thead class="text-warning">
                      <th>SrNo</th>
                      <th>Heading</th>
                      <th>Subheading</th>
                      <th>Content</th>
                      <th>date of publish</th>
                      <th>photo</th>
                    </thead>
                    <tbody>
                      <?php
    for($i=0;$i<count($row_selecte);$i++)
    {
    ?>
                      <tr>
                        <td><?php echo $i+1;?></td>
                        <td><?php echo $row_selecte[$i]['head'];?></td>
                        <td><?php echo $row_selecte[$i]['subhead'];?></td>
                        <td><?php echo $row_selecte[$i]['content'];?></td>

                        <td><?php echo $row_selecte[$i]['publishdate'];?></td>
                        <td><img src="images/<?php echo $row_selecte[$i]['company_photo'];?>" height="50px" width="50px"></td>
                     </tr>
                      <?php
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>



</body>
</html>

