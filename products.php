<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sound Store | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Sound Store!</h1>
            <p>Online shopping has seen massive growth worldwide, especially post-pandemic, with consumers preferring the convenience and safety of purchasing products from home.
The growth of e-commerce has revolutionized shopping habits, providing greater convenience and access to a wider range of products, often at competitive prices.
</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id=" Wireless Headphones">
    <div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Added shadow effect here -->
        <img src="https://m.media-amazon.com/images/I/61ARHuuiNuL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Razer BlackShark V2 X USB Wired Esports Gaming Headset</h6>
            <h6>Price : Rs 3499</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Star icon -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
                <span>&#9734;</span> <!-- Empty star for lower rating -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(1)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- Add some CSS styling for the rating stars and shadow -->
<style>
    .rating span {
        color: #FFD700; /* Star color (gold) */
        font-size: 1.2em;
    }
</style>

        <div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Added shadow effect here -->
        <img src="https://m.media-amazon.com/images/I/51tVVALVrrL._SL1200_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Cosmic Byte Proteus Headset Dual Input USB and 3.5mm</h6>
            <h6>Price : Rs 1,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Star icon -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star for lower rating -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(2)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- Add some CSS styling for the rating stars and shadow -->
<style>
    .rating span {
        color: #FFD700; /* Star color (gold) */
        font-size: 1.2em;
    }
</style>

<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61jlFEwSt+L._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>boAt Rockerz 450 Pro Bluetooth On Ear Headphones</h6>
            <h6>Price: Rs 1,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(3)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>

<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61kFL7ywsZS._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>JBL Tune 510BT, On Ear Wireless Headphones </h6>
            <h6>Price: Rs 1800</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(4)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>

<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61ihz46SLOL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>boAt Rockerz 450R On-Ear Headphones</h6>
            <h6>Price: Rs 1,499</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(5)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/81PWWZquukL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Skullcandy Hesh ANC Bluetooth Wireless Over-Ear Headphones</h6>
            <h6>Price: Rs 5,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(6)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/41JACWT-wWL._SL1200_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Sony WH-CH520, Wireless On-Ear Bluetooth Headphones</h6>
            <h6>Price: Rs 2,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/7154EWu-5LL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Cosmic Byte GS430 Gaming wired over ear Headphone</h6>
            <h6>Price: Rs 699</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(8)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61+R5rOj9+L._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Noise Newly Launched 4 Wireless Over-Ear Headphones</h6>
            <h6>Price: Rs 2,199</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/619w5E8UpbL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>ZEBRONICS Duke Plus, Wireless Over Ear Headphone</h6>
            <h6>Price: Rs 1,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
    @keyframes fadeInAnimation {
            0% {
                opacity: 0;
                transform: translateY(20px); /* Start position slightly lower */
            }
            100% {
                opacity: 1;
                transform: translateY(0); /* End position at normal location */
            }
        }

        /* Apply fade-in animation to elements with .fade-in */
        .fade-in {
            opacity: 0; /* Initial state for animation */
            animation: fadeInAnimation 1.5s ease forwards; /* Duration and easing */
        }

        /* Hover effects */
        .col-md-3.col-6.py-2 a  {
            color: black;
            transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition for color and scale */
        }

        .col-md-3.col-6.py-2 a:hover {
            color: grey;
            transform: scale(1.05); /* Slight zoom on hover */
        }

        .col-md-3.col-6.py-2 img {
            border-radius: 0.5rem;
            transition: transform 0.3s ease; /* Smooth transition for image scale */
        }

        .col-md-3.col-6.py-2 img:hover {
            transform: scale(1.05); /* Slight zoom on image hover */
        }
</style>
      
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/610NdWdTLiL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>soundcore Wireless Bluetooth Over-Ear Headphones</h6>
            <h6>Price: Rs 3,599</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>

<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/715wH-KhfYL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>realme TechLife Studio H1 Over The Ear Headphone</h6>
            <h6>Price: Rs 4,499</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/51152MIm7QL._SL1080_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Cosmic Byte Inferno 2.4Ghz Wireless Bluetooth Wired Headphone</h6>
            <h6>Price: Rs 2,999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span> <!-- Empty star -->
                <span>&#9733;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/51eUZqHgD4L._SL1400_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Portronics Muffs M3 Over Ear Headphones with ANC Enabled, Upto 40 Hours Playtime</h6>
            <h6>Price: Rs 999</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61ZlqdYsbDL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>ZEBRONICS Zeb-Blitz USB Gaming Wired On Ear Headphones </h6>
            <h6>Price: Rs 1,890</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
<div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Shadow effect added here -->
        <img src="https://m.media-amazon.com/images/I/61XvYOrqVeL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>boAt Rockerz 425 Bluetooth Wireless Over Ear Headphones with Beast Mode for gaming</h6>
            <h6>Price: Rs 1,290</h6>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span> <!-- Filled star -->
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span> <!-- Empty star -->
                <span>&#9734;</span> <!-- Empty star -->
            </div>

            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
            <?php } else {
                if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                <?php }
            } ?>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700; /* Gold color for stars */
        font-size: 1.2em;
    }
</style>
                   
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>