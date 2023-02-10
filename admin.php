<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
    include_once ('classes/userModel.php');
    include_once ('classes/messageModel.php');
    include_once ('classes/productModel.php');
    $user = new User();
    $message = new Message();
    $product = new Product();
?>

<html>
<head>
<title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adminp.css">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include_once('inc/header.php') ?>
    </header>
    <!--BODY -->
    <div id="panelcontainer">
      <div id="panelsidebar">
       <ul id="sidebarList">
          <a href="admin.php?page=dashboard"><li class="sbMenu"><i class="fa-solid fa-gauge"></i>Dashboard</li></a>
          <a href="admin.php?page=users"><li class="sbMenu"><i class="fa-solid fa-user"></i>Users</li></a>
          <a href="admin.php?page=orders"><li class="sbMenu"><i class="fa-solid fa-sack-dollar"></i>Orders</li></a>
          <a href="admin.php?page=products"><li class="sbMenu"><i class="fa-solid fa-bars"></i>Products</li></a>
          <a href="admin.php?page=messages"><li class="sbMenu"><i class="fa-solid fa-inbox"></i>Messages</li></a>
       </ul>
      </div>
      <div id="mainpanel">
        <div class="mainbody">
        <?php 
          if(isset($_GET['page'])){
              switch ($_GET['page']){
                  case ('dashboard'):
                      include 'admin/dashboard.php';
                      break;
                  case ('users'):
                      include 'admin/users.php';
                      break;
                  case ('orders'):
                      include 'admin/orders.php';
                      break;
                  case ('products'):
                      include 'admin/products.php';
                      break;
                  case ('messages'):
                      include 'admin/messages.php';
                      break;
              }
          }
        ?>
        </div>
      </div>
    </div>
</body>
</html>

<?php
}
?>