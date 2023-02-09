<?php
session_start();
?>
<html>
<head>
    <title>ROSSETI - Order</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HEADER -->
    <header>
      <?php include_once('inc/header.php') ?>
    </header>
    <!-- BODY -->
    <div id="deliverybody">
        <div id="deliveryHeader">
            <h1>Delivery Menu </h1>
            <div id="deliveryButtons">
                <button onclick="showPizzaMenu()" id="pizzaButt" class="selectedMenu">PIZZA</button>
                <button onclick="showPastaMenu()" id="pastaButt" class="deliveryButtons">PASTA</button>
                <button onclick="showDrinksMenu()" id="drinksButt" class="deliveryButtons">DRINKS</button>
            </div>
        </div>
        <div id="pizzaMenu">
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/pepperoni.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Peperoni Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/tomato.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Tomato Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/margharita.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Margharita Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/mushrooms.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Mushrooms Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/tuna.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Tuna Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/vegetarian.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Vegetarian Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/mozzaralla.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Mozzaerlla Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/mozzaralla.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Mozzaerlla Pizza</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="pastaMenu" style="display: none;">
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/bolognese.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Bolognese</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/carbonara.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Carbonara</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/cheesepasta.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Cheese</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/meatballs.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Meatballs</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/tomatopasta.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Tomato</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/vegetarianpasta.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Vegetarian</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="drinksMenu" style="display: none;">
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/water.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Water</h2>
                        <h4>Uje Rugove</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/sparkling.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Sparkling Water</h2>
                        <h4></h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/cola.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Coca Cola</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/colazero.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Coca Cola Zero</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/fanta.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Fanta</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/sprite.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Sprite</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/redbull.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Red Bull</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="productContainer">
                <div class="pimage">
                    <img src="images/delivery/icetea.png" />
                </div>
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2>Ice Tea</h2>
                        <h4>Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil</h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP">7$</p>
                        <button>Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/JS.js"></script>

        <footer>
            <p>ROSSETI PIZZA | All rights reserved 2022 �</p>
        </footer>
</body>
</html>