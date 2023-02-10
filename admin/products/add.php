<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
$errormessage = "";
$targetDir = "images/delivery/";
if(isset($_POST['addproduct'])){
	$targetFile = $targetDir.basename($_FILES['image']['name']);
	$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$type = $_POST['type'];

    if(empty($name) || empty($description) || empty($price)){
		$errormessage = "All fields are required!";
	}
	else if(file_exists($targetFile) || $imageFileType != 'png'){
        $errormessage = "Image is not png or Exists!";
	}
	else{
	move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    $newProduct = new Product($name, $description, $type, $price, $targetFile);
	if($newProduct->productExists()){
		$errormessage = "Product With Same Name Or Description Already Exists!";
	}
	else{
    $newProduct->addProduct();
    header('Location: ?page=products');
	}
  }

}	
?>
<h1>Add New Product</h1>
   <form method="post" id="editform" enctype="multipart/form-data">
   <h4 style="color: red;"><?php echo $errormessage?></h4>
   <label>Name: </label><input class="formI" type="text" name="name"/>
   <label>Description: </label><input class="formI" type="text" name="description"/>
   <label>Price: </label><input class="formI" type="number" name="price"/>
   <label>Type: </label>
   <select class="formI" name="type">
     <option value="pizza">Pizza</option>
	 <option value="pasta">Pasta</option>
     <option value="drink">Drink</option>
   </select>
   <label>Image: </label>
   <input class="formI" type="file" name="image"/>
   <div id="formbuttons">
   <a href="?page=products"><input class="formB" type="button" value="Go Back"></a>
   <input class="formB" type="submit" name="addproduct" value="Add">
   </div>
   </form>
<?php
}
?>