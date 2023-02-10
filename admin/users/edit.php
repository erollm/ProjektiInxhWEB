<?php
if(isset($_SESSION['username']) && $_SESSION['role'] == "admin"){ 
$errormessage = "";
if(isset($_POST['saveuser'])){
	$user->setUsername($_POST['username']);
	$user->setEmail($_POST['email']);
	if($user->userExists()['result']){
		$errormessage = $user->userExists()['message'];
	}
	else{
    $user->updateUser();
    header('Location: ?page=users');
	}
}
	$id = $user->getId();
	$username = $user->getUsername();
	$email = $user->getEmail();
	$registrationdate = $user->getRegistrationDate();
?>
<h1>Edit User</h1>
   <form method="post" id="editform">
   <h4 style="color: red;"><?php echo $errormessage?></h4>
   <label>ID: </label><input class="formI" type="number" value="<?php echo $id ?>" name="id" disabled/>
   <label>Username: </label><input class="formI" type="text" value="<?php echo $username?>" name="username"/>
   <label>Email: </label><input class="formI" type="email" value="<?php echo $email?>" name="email"/>
   <label>Registration date: </label><input class="formI" type="text" value="<?php echo $registrationdate?>" disabled/>
   <div id="formbuttons">
   <a href="?page=users"><input class="formB" type="button" value="Go Back"></a>
   <input class="formB" type="submit" name="saveuser">
   </div>
   </form>
<?php
}
?>