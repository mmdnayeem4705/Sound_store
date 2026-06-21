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
            <h1>Offers on premium products</h1>
            <p>"Discover unbeatable deals on our premium headphones! Upgrade your audio experience today with exclusive discounts and special offers."</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
      
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id=" Wireless Headphones">
    <div class="col-md-3 col-6 py-2">
    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Added shadow effect here -->
        <img src="https://m.media-amazon.com/images/I/61jzBZHmO3L._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>JBL Quantum 100 Wired Over Ear Gaming Headphones</h6>
            <h6>Price : Rs 1,499</h6>

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
                if (check_if_added_to_cart(17)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=17" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
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
        <img src="https://m.media-amazon.com/images/I/61SJ2EJwK+L._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>SpinBot Ranger HX300 Wireless Bluetooth Headphones</h6>
            <h6>Price : Rs 999</h6>

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
                if (check_if_added_to_cart(18)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=18" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
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
        <img src="https://m.media-amazon.com/images/I/51rpbVmi9XL._SL1200_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Sony Wireless Active Noise Cancellation Headphones</h6>
            <h6>Price: Rs 5,999</h6>

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
                if (check_if_added_to_cart(19)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=19" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
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
        <img src="https://m.media-amazon.com/images/I/51aXvjzcukL._SL1500_.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Sony Active Noise Cancelling Wireless Headphones </h6>
            <h6>Price: Rs 19,999</h6>

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
                if (check_if_added_to_cart(20)) {
                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                } else { ?>
                    <p><a href="cart-add.php?id=20" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
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
<style>
    /* Keyframes for fade-in animation */
    @keyframes fadeInContainer {
        to {
            opacity: 1;
        }
    }

    /* Hover effects for links and images within the container */
    .container a:hover {
        color: grey;
        transform: scale(1.05); /* Slight zoom effect on hover */
    }

    .container img:hover {
        transform: scale(1.05); /* Slight zoom on image hover */
    }
</style>


<footer class="">
    <div class="container text-center">
        <span class="text-muted">
            <b>Copyright&copy;Sound Store | All Rights Reserved | Contact Us: +91 7013827080</b>
        </span>
    </div>
</footer>