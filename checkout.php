<?php
session_start();
include_once ('classes/cart.php');
$cartCount = $cart->count();
if($cartCount == 0){
    header('Location: order.php');
}
else if(!isset($_SESSION['username']) && !isset($_SESSION['role'])){
    header('Location: login.php');
}
include_once ('classes/orderModel.php');
include_once ('classes/orderProducts.php');
$total = $cart->getTotal();
$products = $cart->getProducts();
if(isset($_POST['checkout'])){
    $id = $_SESSION['username'];
    $name = $_POST['name'];
    $address = $_POST['address'].", ".$_POST['city'].", ".$_POST['zip'];
    $phone = $_POST['phone'];
    $order = new Order($id, $total, $name, $address, $phone);
    $order->addOrder();
    $orderId = $order->getId();

    foreach($products as $product){
    $pId = $product['id'];
    $pQuantity = $product['quantity'];
    $orderProduct = new OrderProducts($orderId, $pId, $pQuantity);
    $orderProduct->addOrderProducts();
    }
    $cart->clear();
    header('location: index.php');
}
?>
<html>
<head>
    <title>ROSSETI - Checkout</title>
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
      <div id="checkoutbody">
      <div id="checkoutdelivery">
      <h2>Delivery Address</h2>
      <form method="post">
      <input class="checkoutInput" type="text" placeholder="Full Name" name="name"/>
      <input class="checkoutInput" type="text" placeholder="Address" name="address"/>
      <input class="checkoutInput" type="text" placeholder="City" name="city"/>
      <input class="checkoutInput" type="text" placeholder="Zip Code" name="zip"/>
      <input class="checkoutInput" type="text" placeholder="Phone" name="phone"/>
      <div id="paymentmethod">
      <h3>Payment method</h3>
      <div id="paymentradios">
      <label>
      <input type="radio" disabled/>
      <i class="disabledradio fa-solid fa-credit-card"></i></label>
      <label>
      <input type="radio" disabled/>
      <i class="disabledradio fa-brands fa-cc-paypal"></i></label>
      <label>
      <input type="radio" checked/>
      <i class="cashradio fa-solid fa-money-bill"></i></label>
      </div>
      </div>
       <div id="cartButtons" class="cartButtonsC">
      <button class="cartButtonC" onclick="redirect('cart.php')">Go Back</button>
      <button class="cartButtonY" type="submit" name="checkout">Checkout</button>
      </form>
        </div>
      </div>
      <div id="checkoutcart">
      <table class="cartTable">
         <tr>
          <th class="alignleft">Products</th>
          <th class="alignright">Price</th>
         </tr>
         <?php
         foreach($products as $product){
         $price = $product['price']*$product['quantity'];
         ?>
         <tr class="cartRow">
         <td><?=$product['quantity']." x ".$product['name']?></td>
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
    </div>
    </div>
        <script src="js/JS.js"></script>

        <footer>
            <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
        </footer>
</body>
</html>