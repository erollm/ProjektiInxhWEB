<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){
$totalUsers = $user->getTotalofusers();
$totalProducts = $product->getTotalofproducts();	

$totalMessages = $message->getTotalofmessages();

?>
<div id="dashboard">
<div class="statscontainer">
<h3>Total Users</h3>
<h4><?=$totalUsers?></h4>
</div>
<div class="statscontainer">
<h3>Total Orders</h3>
<h4>1</h4>
</div>
<div class="statscontainer">
<h3>Total Products</h3>
<h4><?=$totalProducts?></h4>
</div>
<div class="statscontainer">
<h3>Total Messages</h3>
<h4><?=$totalMessages?></h4>
</div>
</div>
<?php
}
?>