<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){
if(isset($_GET['view'])){
    $selectedId = $_GET['view'];
    $details = $orderDetails->getProducts($selectedId);
    include_once('admin/orders/view.php');
}
else{
$orders = $order->getAllOrders();
?>

<h1>Orders</h1>
<table id="viewtable">
   <tr>
     <th>ID</th>
     <th>UserID</th>
     <th>Name</th>
     <th>Address</th>
     <th>Phone</th>
     <th>Total</th>
     <th>Order Date</th>
     <th class="alignRights">More</th>
   </tr>
    <?php
      foreach($orders as $value){
      $date = date('Y-m-d', strtotime($value['orderdate']));?>
       <tr>
       <td><?=$value['id']?></td>
       <td><?=$value['userid']?></td>
       <td><?=$value['name']?></td>
       <td><?=$value['address']?></td>
       <td><?=$value['phone']?></td>
       <td><?=$value['total']?>$</td>
       <td><?=$date?></td>
       <td class='alignRights'><a href='?page=orders&view=<?=$value['id']?>'><div class='crudB editB'><i class="fa-solid fa-ellipsis"></i></div></td>
       </tr>
   <?php
   }
   ?>
   </table>
<?php
 }
}
?>