<?php
session_start();
include_once ('classes/productModel.php');
include_once('classes/cart.php');
$product = new Product();
$products = $product->getAllProducts();
if(isset($_POST['addCart'])){
    $productId = $_POST['pId'];
    $cart->add($productId);
}

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
        <?php
        for($i = 0;$i<count($products);$i++){
            if($products[$i]['type'] == 'pizza'){?>
            <div class="productContainer">
                    <img class="pimage" src="<?=$products[$i]['image']?>" />
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2><?=$products[$i]['name']?></h2>
                        <h4><?=$products[$i]['description']?></h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP"><?=$products[$i]['price']?>$</p>
                        <form method="post">
                        <input type="number" value="<?=$products[$i]['id']?>" name="pId" hidden/>
                        <button type="submit" name="addCart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
        </div>

        <div id="pastaMenu" style="display: none;">
        <?php
        for($i = 0;$i<count($products);$i++){
            if($products[$i]['type'] == 'pasta'){?>
            <div class="productContainer">
                    <img class="pimage" src="<?=$products[$i]['image']?>" />
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2><?=$products[$i]['name']?></h2>
                        <h4><?=$products[$i]['description']?></h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP"><?=$products[$i]['price']?>$</p>
                        <form method="post">
                        <input type="number" value="<?=$products[$i]['id']?>" name="pId" hidden/>
                        <button type="submit" name="addCart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
        </div>

        <div id="drinksMenu" style="display: none;">
        <?php
        for($i = 0;$i<count($products);$i++){
            if($products[$i]['type'] == 'drink'){?>
            <div class="productContainer">
                    <img class="pimage" src="<?=$products[$i]['image']?>" />
                <div class="pinfo">
                    <div class="pinfoH">
                        <h2><?=$products[$i]['name']?></h2>
                        <h4><?=$products[$i]['description']?></h4>
                    </div>
                    <div class="pinfoF">
                        <p class="priceP"><?=$products[$i]['price']?>$</p>
                        <form method="post">
                        <input type="number" value="<?=$products[$i]['id']?>" name="pId" hidden/>
                        <button type="submit" name="addCart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>           
        </div>

        <script src="js/JS.js"></script>

        <footer>
            <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
        </footer>
</body>
</html>