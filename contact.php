<?php
session_start();
include_once ('classes/messageModel.php');
if (isset($_POST['sendmessage'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $newMessage = new Message($fullname, $email, $subject, $message);
    $newMessage->sendMessage();
}
?>
<html>
<head>
    <title>ROSSETI - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HEADER -->
    <header>
       <?php include_once('inc/header.php') ?>
    </header>
    <!-- BODY -->
    <div id="contactBody">
        <div id="contactus">
            <div id="formandmap">
                <div id="contactform">
                    <form method="post">
                        <h1>Contact Us</h1>
                        <h4 id="errormessage"></h4>
                        <div id="contactNameEmail">
                            <div class="contactInput">
                                <label>FULL NAME</label>
                                <input id="fullname" type="text" placeholder="Name" name="fullname"/>
                            </div>
                            <div class="contactInput">
                                <label>EMAIL ADDRESS</label>
                                <input id="email" type="email" placeholder="Email" name="email"/>
                            </div>
                        </div>
                        <div class="contactInput">
                            <label>SUBJECT</label>
                            <input id="subject" type="text" placeholder="Subject" name="subject"/>
                        </div>
                        <div class="contactInput">
                            <label>MESSAGE</label>
                            <textarea id="message" type="text" placeholder="Message" style="height:100px;" name="message"></textarea>
                        </div>
                        <button id="contactbutton" type="submit" name="sendmessage">Send Message</button>
                    </form>
                </div>

                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="400" height="515" id="gmap_canvas" src="https://maps.google.com/maps?q=J5W3+V69,%20Prishtina%2010000&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 515px;
                                width: 400px;
                            }
                        </style><a href="https://www.embedgooglemap.net">google iframe map</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 515px;
                                width: 400px;
                            }
                        </style>
                    </div>
                </div>
            </div>

            <div id="contactIcons">
                <div class="contactIcons">
                    <i class="fa-solid fa-compass fa-3x"></i>
                    <p class="mobile0">Lagjia Kalabria</p>
                    <p>10000 Prishtine</p>
                </div>
                <div class="contactIcons">
                    <i class="fa-solid fa-square-phone fa-3x"></i>
                    <p class="mobile0">Phone:</p><p>+383 38 541 400</p>
                </div>
                <div class="contactIcons">
                    <i class="fa-solid fa-envelope fa-3x"></i>
                    <p class="mobile0">Email: </p><p>info@ubt-uni.net</p>
                </div>
                <div class="contactIcons">
                    <i class="fa-solid fa-globe fa-3x"> </i>
                    <p class="mobile0">Website:</p><p> ubt-uni.net</p>
                </div>
            </div>

        </div>

    </div>
    <script src="js/validimi.js"></script>
    <script src="js/JS.js"></script>
    <footer style="position: static;">
        <p>ROSSETI PIZZA | All rights reserved 2022 ©</p>
    </footer>
</body>
</html>