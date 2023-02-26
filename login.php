<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    header('Location: index.php');
}
include_once ('classes/userModel.php');
$errormessage = "";
if (isset($_POST['loginS'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $user->setUsername($username);
    $user->setPassword($password);
    if($user->validLogin()['result']){
       $id = $user->getId();
       $_SESSION['username'] = $id;  
       $_SESSION['role'] = $user->validLogin()['role']; 
       header('Location: order.php');
    }
    else{
        $errormessage = "Invalid username or password";
    }
}
?>

<html>
<head>
    <title>ROSSETI - Log In</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <!-- HEADER -->
    <header>
        <?php include_once('inc/header.php') ?>
    </header>
    <!-- BODY -->
    <div id="bodylogin">
        <div id="loginbox">
            <div id="loginheader">
                <h1>Log In</h1>
                <p>Login or create a new account</p>
                <h4 id="errormesage"><?=$errormessage?></h4>
            </div>
            <form method="POST" id="loginInput">
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-circle-user"></i>
                        </span>
                        <input class="inputBox" type="text" id="username" placeholder="Username" name="username"/>
                    </div>
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input class="inputBox" type="password" id="password" placeholder="Password" name="password"/>
                    </div>
                    <div id="Loginfooter">
                        <input type="submit" id="loginbutton" value="Log In" name="loginS"/>
                    </div>
            </form>
            <div id="loginExtras">
                <a id="forgetPassword" href="forgetPassword.html">Forget <br /> Password</a>
                <a href="register.php"><button id="signupButton">Register</button></a>
            </div>
        </div>
    </div>
    </main>
    <script src="js/validimi.js"></script>
    <script src="js/JS.js"></script>
    <!-- FOOTER -->
    <footer>
        <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
    </footer>
</body>
</html>