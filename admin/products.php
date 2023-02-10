<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
if(isset($_GET['add'])){
    include_once ('admin/products/add.php');
}
else if(isset($_GET['edit'])){
    $selectedId = $_GET['edit'];
    $product->selectProduct($selectedId);
    include_once ('admin/products/edit.php');
 }
 else{
   if(isset($_GET['delete'])){
       $deleteid = $_GET['delete'];
       $product->deleteProduct($deleteid);
   }
$products = $product->getAllProducts();
?>
<h1>Products</h1>
<a href="?page=products&add"><div class="crudB addB">Add New Product <i class="fa-solid fa-plus"></i></div></a>
<table id="viewtable">
   <tr>
     <th>ID</th>
     <th>Image</th>
     <th>Name</th>
     <th>Description</th>
     <th>Price</th>
     <th>Type</th>
     <th>Creation date</th>
     <th>Actions</th>
   </tr>
   <?php
      foreach($products as $value){
       $date = date('Y-m-d', strtotime($value['creationdate']));
       echo "<tr>";
       echo "<td>$value[id]</td>";
       echo "<td>$value[image]</td>";
       echo "<td>$value[name]</td>";
       echo "<td>$value[description]</td>";
       echo "<td>$value[price]</td>";
       echo "<td>$value[type]</td>";
       echo "<td>$date</td>";
       echo "<td class='actionsC'><a href='?page=products&edit=$value[id]'><div class='crudB editB'><i class='fa-solid fa-pen'></i></div></a><a href='?page=products&delete=$value[id]'><div class='crudB deleteB'><i class='fa-solid fa-trash-can'></i></div></a></td>";
       echo "</tr>";
   }
   ?>
</table>
<?php
 }
}
?>