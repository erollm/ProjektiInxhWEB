<?php
session_start();
include_once ('classes/cart.php');
include_once ('classes/productModel.php');
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $cart->remove($id);
}
else if(isset($_POST['update'])){
    $id = $_POST['id'];
    $quant = $_POST['quantity'];
    $cart->update($id, $quant);
}
else if(isset($_POST['empty'])){
    $cart->clear();
}
else if(isset($_POST['continueS'])){
    header('Location: order.php');
}
$products = $cart->getProducts();
$total = $cart->getTotal();
?>

<html>
<head>
    <title>ROSSETI - Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <!-- HEADER -->
    <header>
      <?php include_once('inc/header.php') ?>
    </header>

    <!-- BODY -->
    <div id="cartbody">
      <h1>Cart</h1>
      <table class="cartTable">
         <tr>
          <th class="alignleft">Product</th>
          <th>Quantity</th>
          <th class="alignright">Price</th>
         </tr>
         <?php
         foreach($products as $product){
         $price = $product['price']*$product['quantity'];
         ?>
         <tr class="cartRow">
         <td><?=$product['name']?></td>
         <td class="aligncenter"><form method="post"><input type="hidden" name="id" value="<?=$product['id']?>" /><input class="cartInput" type="number" min="0" name="quantity" value="<?=$product['quantity']?>"/><button name="update" class="cartAction cartButtonY"><i class="fa-solid fa-arrows-rotate"></i></button><button class="cartAction cartActionR" name="delete"><i class="fa-solid fa-trash"></i></button></form></td>
         <td class="alignright"><?=$price?>.00$</td>
         </tr>
         <?php
         }
         ?>

      </table>
      <div class="totalprice">
      <p>Total</p>
      <p><?=$total?>.00$</p>
      </div>
      <div id="cartButtons" class="cartButtons">
      <form method="post">
      <button class="cartButtonY" name="empty">Empty Cart</button>
      </form>
      <div id="cartRightB">
      <button class="cartButtonC" onclick="redirect('order.php')">Continue Shopping</button>
      <button class="cartButtonY" onclick="redirect('checkout.php')">Checkout</button>
      
      </div>
      </div>
    </div>
        <script src="js/JS.js"></script>

        <footer>
            <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
        </footer>
</body>
</html>