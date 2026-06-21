<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sound Store! | Online Shopping on Headphones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Delius+Swash+Caps|Andika" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!-- Header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    
    <div id="content">
        <div id="bg">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                    <h1>Welcome to Sound Store</h1>
                    <p>We sell Happiness :)</p>
                    <a href="#products-section" class="btn btn-warning btn-lg text-white">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center pt-4 h3">Music sounds better with you—and your headphones</div>

    <!-- Products Section -->
    <div class="container mt-5" id="products-section">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3 col-6 py-2">
                <div class="card shadow-lg">
                    <img src="https://m.media-amazon.com/images/I/51152MIm7QL._SL1080_.jpg" alt="Cosmic Byte Inferno" class="img-fluid pb-1">
                    <div class="figure-caption text-center">
                        <h6>Cosmic Byte Inferno 2.4Ghz Wireless Headphone</h6>
                        <h6>Price: Rs 2,999</h6>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
                        </div>
                        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#productModal1">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Modal for Product 1 -->
            <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel1">Cosmic Byte Inferno 2.4Ghz Wireless Headphone</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://m.media-amazon.com/images/I/51152MIm7QL._SL1080_.jpg" alt="Cosmic Byte Inferno" class="img-fluid">
                            <p>High-quality sound, Bluetooth connectivity, and long-lasting battery life.</p>
                            <p><strong>Price:</strong> Rs 2,999</p>
                        </div>
                        <div class="modal-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="index.php#login" class="btn btn-warning text-white">Add To Cart</a>
                            <?php } else {
                                if (check_if_added_to_cart(13)) {
                                    echo '<button class="btn btn-warning text-white" disabled>Added to cart</button>';
                                } else { ?>
                                    <a href="cart-add.php?id=13" class="btn btn-warning text-white">Add to cart</a>
                                <?php }
                            } ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-3 col-6 py-2">
                <div class="card shadow-lg">
                    <img src="https://m.media-amazon.com/images/I/51eUZqHgD4L._SL1400_.jpg" alt="Portronics Muffs" class="img-fluid pb-1">
                    <div class="figure-caption text-center">
                        <h6>Portronics Muffs M3 Over Ear Headphones</h6>
                        <h6>Price: Rs 999</h6>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span>
                        </div>
                        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#productModal2">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Modal for Product 2 -->
            <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel2">Portronics Muffs M3 Over Ear Headphones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://m.media-amazon.com/images/I/51eUZqHgD4L._SL1400_.jpg" alt="Portronics Muffs" class="img-fluid">
                            <p>Over-ear design with Active Noise Cancellation, Bluetooth support, and up to 40 hours playtime.</p>
                            <p><strong>Price:</strong> Rs 999</p>
                        </div>
                        <div class="modal-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="index.php#login" class="btn btn-warning text-white">Add To Cart</a>
                            <?php } else {
                                if (check_if_added_to_cart(14)) {
                                    echo '<button class="btn btn-warning text-white" disabled>Added to cart</button>';
                                } else { ?>
                                    <a href="cart-add.php?id=14" class="btn btn-warning text-white">Add to cart</a>
                                <?php }
                            } ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-3 col-6 py-2">
                <div class="card shadow-lg">
                    <img src="https://m.media-amazon.com/images/I/61ZlqdYsbDL._SL1500_.jpg" alt="ZEBRONICS Zeb-Blitz" class="img-fluid pb-1">
                    <div class="figure-caption text-center">
                        <h6>ZEBRONICS Zeb-Blitz USB Gaming Headphones</h6>
                        <h6>Price: Rs 1,890</h6>
                        <div class="rating">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span>
                        </div>
                        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#productModal3">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Modal for Product 3 -->
            <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel3">ZEBRONICS Zeb-Blitz USB Gaming Headphones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://m.media-amazon.com/images/I/61ZlqdYsbDL._SL1500_.jpg" alt="ZEBRONICS Zeb-Blitz" class="img-fluid">
                            <p>Gaming headphones with RGB lights, virtual 7.1 surround sound, and USB connectivity.</p>
                            <p><strong>Price:</strong> Rs 1,890</p>
                        </div>
                        <div class="modal-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="index.php#login" class="btn btn-warning text-white">Add To Cart</a>
                            <?php } else {
                                if (check_if_added_to_cart(15)) {
                                    echo '<button class="btn btn-warning text-white" disabled>Added to cart</button>';
                                } else { ?>
                                    <a href="cart-add.php?id=15" class="btn btn-warning text-white">Add to cart</a>
                                <?php }
                            } ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

         

             <!-- Card for Product 4 -->
<div class="col-md-3 col-6 py-2">
<div class="card shadow-lg">
       <!-- Verify the image URL or use a local path -->
        <img src="https://m.media-amazon.com/images/I/61XvYOrqVeL._SL1500_.jpg" onerror="this.onerror=null; this.src='default-image.jpg'" alt="boAt Rockerz 370" class="img-fluid pb-1">
        <div class="figure-caption text-center">
            <h6>boAt Rockerz 370 Bluetooth Headphones</h6>
            <p>Price: Rs 1,299</p>

            <!-- Star Rating Feature -->
            <div class="rating">
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
                <span>&#9734;</span>
            </div>

            <button class="btn btn-warning text-white" data-toggle="modal" data-target="#productModal4">View Details</button>
        </div>
    </div>
</div>    <div class="card shadow-lg" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"> 
 

<!-- Modal for Product 4 -->
<div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel4" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel4">boAt Rockerz 370 Bluetooth Headphones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <!-- Ensure the image URL is correct or provide a fallback -->
                <img src="https://m.media-amazon.com/images/I/61XvYOrqVeL._SL1500_.jpg" onerror="this.onerror=null; this.src='default-image.jpg'" alt="boAt Rockerz 370" class="img-fluid mb-3" style="max-height: 400px;">
                <p>Bluetooth headphones with 12 hours of playback, lightweight design, and built-in mic.</p>
                <p><strong>Price:</strong> Rs 1,299</p>
            </div>
            <div class="modal-footer">
                <?php if (!isset($_SESSION['email'])) { ?>
                    <a href="index.php#login" class="btn btn-warning text-white">Add To Cart</a>
                <?php } else {
                    if (check_if_added_to_cart(16)) {
                        echo '<button class="btn btn-warning text-white" disabled>Added to cart</button>';
                    } else { ?>
                        <a href="cart-add.php?id=16" class="btn btn-warning text-white">Add to cart</a>
                    <?php }
                } ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- CSS Styling for star rating and shadow effect -->
<style>
    .rating span {
        color: #FFD700;
        font-size: 1.2em;
    }
</style>


            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>


    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>



    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

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