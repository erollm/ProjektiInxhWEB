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
                    echo "<li><a href='admin.php'>ADMIN</a></li>";
                }
                ?>
            </ul>
</div>
  <div id="mobilebar">
            <a href="javascript:void(0);" onclick="showMenu()">
                <div id="showMenu">
                    <i id="mobileicon" class="fa-solid fa-bars"></i>
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
                ?>
    </ul>