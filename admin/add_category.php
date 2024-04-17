

<?php
include 'connect.php';
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
<title>Add Category</title>
<link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/helper.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

<div class="preloader">
<svg class="circular" viewBox="25 25 50 50">
<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
</svg>
</div>

<div id="main-wrapper">

<div class="header">
<nav class="navbar top-navbar navbar-expand-md navbar-light">
<div class="navbar-header">
<a class="navbar-brand" href="dashboard.php">

<span><img src="images/user-icn.png" alt="homepage" class="dark-logo" /></span>
</a>
</div>
<div class="navbar-collapse">

<ul class="navbar-nav mr-auto mt-md-0">





</ul>

<ul class="navbar-nav my-lg-0">



<li class="nav-item dropdown">

<div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
<ul>
<li>
<div class="drop-title">Notifications</div>
</li>

<li>
<a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
</li>
</ul>
</div>
</li>




<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
<div class="dropdown-menu dropdown-menu-right animated zoomIn">
<ul class="dropdown-user">
<li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
</ul>
</div>
</li>
</ul>
</div>
</nav>
</div>

<div class="left-sidebar">


<div class="scroll-sidebar">

<nav class="sidebar-nav">
<ul id="sidebarnav">
<li class="nav-devider"></li>
<li class="nav-label">Home</li>
<li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
<li class="nav-label">Log</li>
<li> <a href="all_users.php"> <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Category</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="all_category.php">All Category</a></li>
<li><a href="add_category.php">Add Category</a></li>


</ul>
</li>
<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="all_menu.php">All Menues</a></li>
<li><a href="add_menu.php">Add Menu</a></li>


</ul>
</li>
<li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>

</ul>
</nav>

</div>


</div>

<div class="page-wrapper">
                        <div style="padding-top: 10px;">
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">Hii , Admin</a>  .</marquee>
            </div>




<div class="container-fluid">



<?php  echo $error;
echo $success; ?>





<div class="col-lg-12">
<div class="card card-outline-primary">
<div class="card-header">
<h4 class="m-b-0 text-white">Add Category</h4>
</div>
<div class="card-body">
<form action='' method='post' enctype="multipart/form-data">
<div class="form-body">

<hr>
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Category Name</label>
<input type="text" name="c_name" class="form-control">
</div>
</div>
<div class="form-actions">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" style="margin-left: 123px;margin-top: 40px;">
                    <a href="add_category.php" class="btn btn-inverse" style="margin-top: 40px;">Cancel</a>
                </div></form>
              
</div>
</div>
</div>
</div>
<?php if (isset($_POST['submit']) && !empty($_POST['c_name'])) {
    // Retrieve form data
    $c_name = $_POST['c_name'];

    // Check if a row with the same title already exists
    $sql_select = "SELECT rs_id FROM category WHERE title = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("s", $c_name);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows > 0) {
        // If a row with the same title exists, retrieve its rs_id
        $row = $result->fetch_assoc();
        $rs_id = $row['rs_id'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Category with the same title already exists. rs_id: ' . $rs_id . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    } else {
        // If no row with the same title exists, insert a new row
        // Retrieve the maximum rs_id and increment it by 1
        $sql_max_rs_id = "SELECT MAX(rs_id) AS max_rs_id FROM category";
        $result_max_rs_id = $conn->query($sql_max_rs_id);
        $row_max_rs_id = $result_max_rs_id->fetch_assoc();
        $max_rs_id = $row_max_rs_id['max_rs_id'];
        $next_rs_id = $max_rs_id + 1;

        // Insert the new row with the same rs_id
        $sql_insert = "INSERT INTO category (rs_id, title) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("is", $next_rs_id, $c_name);
        $stmt_insert->execute();
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                New Category Added Successfully. rs_id: ' . $next_rs_id . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    }

    // Close statements and connection
    $stmt_select->close();
    if (isset($stmt_insert)) {
        $stmt_insert->close();
    }
    $conn->close();
} else {
    // If category name is empty, display an error message
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Category name cannot be empty.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}


?>
</div>

</div>


</div>

<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="js/custom.min.js"></script>

</body>

</html>
