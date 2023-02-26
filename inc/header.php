<?php
include_once ('classes/cart.php');
$cartCount = $cart->count();
?>
<div id="logo">
            <h2>ROSSETI</h2>
</div>
<div id="navbar">
            <ul>
                <li id="selectednav"><a href="index.php">HOME</a></li>
                <li><a href="specialties.php">SPECIALTIES</a></li>
                <li><a href="order.php">ORDER</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><?php
                if(isset($_SESSION['username'])){
                echo "<a href='logout.php'>LOG OUT</a>";
                }
                else{
                echo "<a href='login.php'>LOG IN</a>";
                }
                ?>
                </li>
                <?php 
                if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                    echo "<li><a href='admin.php?page=dashboard'>ADMIN</a></li>";
                }
                ?>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>CART(<?=$cartCount?>)</a></li>
            </ul>
</div>
  <div id="mobilebar">
            <a href="cart.php"><i id="mobilecart" class="fa-solid fa-cart-shopping">(<?=$cartCount?>)</i></a>
            <a href="javascript:void(0);" onclick="showMenu()">
                <div id="showMenu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </a>
  </div>
    <ul id="mobilenavbar">
            <a class="mAnchor" href="index.php">
            <li class="mobileli">HOME</li></a>
            <a class="mAnchor" href="specialties.php">
            <li class="mobileli">SPECIALTIES</li></a>
            <a class="mAnchor" href="order.php">
            <li class="mobileli">ORDER</li></a>
            <a class="mAnchor" href="contact.php">
            <li class="mobileli">CONTACT</li></a>
            <?php
                if(isset($_SESSION['username'])){
                echo "<a class='mAnchor' href='logout.php'><li class='mobileli'>LOG OUT</li></a>";
                }
                else{
                echo "<a class='mAnchor' href='login.php'><li class='mobileli'>LOG IN</li></a>";
                }
                if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                    echo "<a class='mAnchor' href='admin.php?page=dashboard'><li><li class='mobileli'>ADMIN PANEL</li></a>";
                }
                ?>
    </ul>