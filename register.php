<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    header('Location: index.php');
}
include_once ('classes/userModel.php');
$existsError = "";
if(isset($_POST['registerS'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newUser = new User();
    $newUser->setUsername($username);
    $newUser->setEmail($email);
    $newUser->setPassword($password);

    if($newUser->userExists()['result']){
       $existsError = $newUser->userExists()['message'];
    }
    else{
        $newUser->addUser();
        $existsError = "Registration completed successfully";
        header('Refresh:2; url=login.php');
    }
}
?>

<html>
<head>
    <title>ROSSETI - Register</title>
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
                <h1>Register</h1>
                <h4 id="errormesage"><?php echo $existsError ?></h4>
            </div>
            <form method="post">
                <div id="loginInput">
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-circle-user"></i>
                        </span>
                        <input class="inputBox" id="username" type="text" placeholder="Username" name="username"/>
                    </div>
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input class="inputBox" id="email" type="email" placeholder="Email" name="email"/>
                    </div>
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input class="inputBox" id="password" type="password" placeholder="Password" name="password"/>
                    </div>
                    <div class="loginInput">
                        <span class="iconBox">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input class="inputBox" id="retypepassword" type="password" placeholder="Re-type Password" />
                    </div>

                    <div id="Loginfooter">
                        <button id="registerbutton" type="submit" name="registerS">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src="js/validimi.js"></script>
    <script src="js/JS.js"></script>
    <!-- FOOTER -->
    <footer>
        <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
    </footer>
</body>
</html>