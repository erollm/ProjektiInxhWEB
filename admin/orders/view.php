<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
?>
<h1>Order Details</h1>
<table id="viewtable">
   <tr>
     <th>Product</th>
     <th>Quantity</th>
     <th>Price per unit</th>
     <th>Total</th>
   </tr>
   <?php
   $allTotal=0;
   foreach($details as $product){
   $total = $product['quantity']*$product['price'];
   $allTotal += $total;
   ?>
    <tr>
     <td><?=$product['name']?></td>
     <td><?=$product['quantity']?></td>
     <td><?=$product['price']?>.00$</td>
     <td><?=$total?>.00$</td>
   </tr>
   <?php
   }
   ?>
    <tr>
     <td colspan="4" style="text-align: right;">Total: <?=$allTotal?>.00$</td>
   </tr> 
</table>
<?php
}
?>