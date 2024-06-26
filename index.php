<?php
session_start();
?>
<html>
<head>
    <title>ROSSETI - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="https://kit.fontawesome.com/2f5261353d.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include_once('inc/header.php') ?>
    </header>
    <!-- BODY -->
        <div id="slideshow">
            <div class="slideArrows">
                <i onclick="slideLeft()" class="fa-solid fa-chevron-left fa-2xl"></i>
            </div>
            <div id="slideMiddle">
                <span>

                </span>
                <div id="slideInfo">
                    <h1>ROSSETI PIZZA</h1>
                    <h2>Experience the Best Pizza in the Town</h2>
                    <span id="slideButtons">
                        <a href="order.html"><button>Order</button></a><a href="specialties.html"><button>Specialties</button></a>
                    </span>
                </div>
                <div id="slideSelector">
                    <i id="select1" class="fa-solid fa-circle fa-lg"></i>
                    <i id="select2" class="fa-regular fa-circle fa-lg"></i>
                    <i id="select3" class="fa-regular fa-circle fa-lg"></i>
                </div>
            </div>
            <div class="slideArrows">
                <i onclick="slideRight()" class="fa-solid fa-chevron-right fa-2xl"></i>
            </div>
        </div>
        <div id="About">
            <div id="aboutus" class="aboutusm">
                <img src="images/pizzacooking.jpg" alt="Pizza Cooking" height="400" />
                <div class="aboutusm">
                    <h1>If you don't know about us you will.</h1>
                    <h3>
                        We are a pizzeria restaurant that's been specializing in thin crust pizza, and fine italian dining
                        for almost 90 years. We are family owned with many years of experience in making the best
                        Chicago thin crust pizza anywhere!
                    </h3>
                    <div id="aboutIcons">
                        <i class="fa-brands fa-square-facebook fa-2xl"></i>
                        <i class="fa-brands fa-square-instagram fa-2xl"></i>
                        <i class="fa-brands fa-square-twitter fa-2xl"></i>
                        <i class="fa-solid fa-square-phone-flip fa-2xl"></i>
                    </div>
                </div>
            </div>
            <div id="bestpizza">
                <div id="bestpizzam">
                    <h1>Free Delivery</h1>
                    <h2>Enjoy fast and free delivery from 5pm to 12am</h2>
                </div>
                <div id="bestpizzaimg">
                    <img src="images/pizzadelivery.jpg" alt="Pizza Oven" height="300" />
                </div>
            </div>
        </div>
        <div id="pizzaserved">
            <div class="pizzaserved">
                <h1>10000+</h1>
                <h3>Pizza Served</h3>
            </div>
            <div class="pizzaserved">
                <h1>30</h1>
                <h3>Types of Pizzas</h3>
            </div>
            <div class="pizzaserved">
                <h1>3</h1>
                <h3>Franchises</h3>
            </div>
        </div>
        <div id="feedback">
            <h1>Costumer Reviews</h1>
            <div id="reviews">
                <div class="reviews">
                    <div class="reviewheader">
                        <div class="reviewprofile">
                            <img src="images/female.jpg" alt="Mary Profile" />
                            <h2>Mary</h2>
                        </div>
                        <div>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                        </div>
                    </div>
                    <p class="pfont">
                        If you prefer a balanced napolitan style pizza with a good crust over putting as
                        much ingredients on a piece of dough as possible then this is the place to go.
                        The wait time on getting our order and the food was short and waiters know their
                        menu options. In a perfect service I would like the staff to check up on us even
                        faster/more frequent during dinner. But the service was good enough to still warrant
                        5 stars combined with the quality of the food.
                    </p>

                </div>
                <div class="reviews">
                    <div class="reviewheader">
                        <div class="reviewprofile">
                            <img src="images/male.png" alt="John Profile" />
                            <h2>John</h2>
                        </div>
                        <div>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                            <i class="fa-solid fa-star fa-lg"></i>
                        </div>
                    </div>
                    <p class="pfont">
                        Hands down the best pizza in Chicago. Forget that "Chicago Style" pizza (a joke we locals play on tourists),
                        this Neopolitan style pizza is fresh, beautiful, balanced, and delicious. Great starters, beverages, and desserts to accompany.
                        Friendly service and fun atmosphere. Plan ahead and make a reservation or expect to wait.
                    </p>
                </div>
            </div>
        </div>
    <footer style="position: static;">
        <p>ROSSETI PIZZA | All rights reserved 2022 �</p>
    </footer>
    <script src="js/sliderjs.js"></script>
    <script src="js/JS.js"></script>
</body>
</html>