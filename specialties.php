<?php
session_start();
?>
<html>
<head>
    <title>ROSSETI - Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include_once('inc/header.php') ?>
    </header>
        <div id="menu">
            <div id="menuheader">
                <h1>Specialties</h1>
            </div>
            <div class="menusection">
                <h1>PIZZA</h1>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Marinara</h3>
                        <span class="menuseperator"></span>
                        <h3>€7.00</h3>
                    </span>
                    <span>
                        <h4>Tomato sauce, olive oil, oregano, garlic, basil</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Margherita</h3>
                        <span class="menuseperator"></span>
                        <h3>€7.00</h3>
                    </span>
                    <span>
                        <h4>Tomato sauce, olive oil, basil, mozzarella, oregano</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Peperoni</h3>
                        <span class="menuseperator"></span>
                        <h3>€8.00</h3>
                    </span>
                    <span>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Vegetariana</h3>
                        <span class="menuseperator"></span>
                        <h3>€9.00</h3>
                    </span>
                    <span>
                        <h4>Tomato sauce, mozzarella, tomatoes, peppers, onion, corn, mushrooms, oregano, olives</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Tuna</h3>
                        <span class="menuseperator"></span>
                        <h3>€7.00</h3>
                    </span>
                    <span>
                        <h4>Tomato sauce, tuna, olive oil, mozzarella,  oregano, olives</h4>
                    </span>
                </div>
            </div>
            <div class="menusection">
                <h1>Pasta</h1>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Bolognese</h3>
                        <span class="menuseperator"></span>
                        <h3>€6.00</h3>
                    </span>
                    <span>
                        <h4>With homemade bolognese sauce</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Carbonara</h3>
                        <span class="menuseperator"></span>
                        <h3>€7.00</h3>
                    </span>
                    <span>
                        <h4>With ground beef, egg and cream sauce</h4>
                    </span>
                </div>
                <div class="menuproduct">
                    <span class="menupricing">
                        <h3>Linguine</h3>
                        <span class="menuseperator"></span>
                        <h3>€10.00</h3>
                    </span>
                    <span>
                        <h4>With fresh shrimp, garlic and sauce</h4>
                    </span>
                </div>
            </div>
        </div>
    <script src="js/JS.js"></script>
    <footer style="position: static;">
        <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
    </footer>
</body>
</html>