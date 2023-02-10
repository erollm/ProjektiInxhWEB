<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
$errormessage = "";
if(isset($_POST['saveproduct'])){
	$product->setName($_POST['name']);
	$product->setDescription($_POST['description']);
	$product->setPrice($_POST['price']);
	$product->setType($_POST['type']);
	if($product->productExists()){
		$errormessage = "Product With Same Name Or Description Already Exists!";
	}
	else{
    $product->updateProduct();
    header('Location: ?page=products');
	}
}
	$id = $product->getId();
	$name = $product->getName();
	$description = $product->getDescription();
	$price = $product->getPrice();
	$creationdate = $product->getCreationdate();
	$type = $product->getType();
?>
<h1>Edit Product</h1>
   <form method="post" id="editform">
   <h4 style="color: red;"><?php echo $errormessage?></h4>
   <label>ID: </label><input class="formI" type="number" value="<?php echo $id ?>" name="id" disabled/>
   <label>Name: </label><input class="formI" type="text" value="<?php echo $name?>" name="name"/>
   <label>Description: </label><input class="formI" type="text" value="<?php echo $description?>" name="description"/>
   <label>Price: </label><input class="formI" type="number" value="<?php echo $price?>" name="price"/>
   <label>Type: </label>
   <select class="formI" name="type">
     <option hidden value="<?=$type?>" selected><?=$type?></option>
     <option value="pizza">Pizza</option>
	 <option value="pasta">Pasta</option>
     <option value="drink">Drink</option>
   </select>
   <label>Creation date: </label><input class="formI" type="text" value="<?php echo $creationdate?>" disabled/>
   <div id="formbuttons">
   <a href="?page=products"><input class="formB" type="button" value="Go Back"></a>
   <input class="formB" type="submit" name="saveproduct" value="Save">
   </div>
   </form>
<?php
}
?>