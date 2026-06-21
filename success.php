<?php
require "includes/common.php";
session_start();

$user_id = $_SESSION['user_id'];

// Update order status to confirmed
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND status='Added to cart'";
mysqli_query($con, $query);

// Initialize thank you message
$thank_you_message = '';

// Check if the payment method form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['payment_option'])) {
    // Here you might want to process the payment, but we'll just set the thank you message for now
    $thank_you_message = "Thank you for your payment! Your order has been confirmed.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sound Store | Order Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header_menu.php'; ?>
    
    <div class="container-fluid mt-5 pt-5" id="content" style="margin-bottom:200px">
        <div class="col-md-8 mx-auto">
            <div class="jumbotron text-center">
                <hr>
                <?php if ($thank_you_message): ?>
                    <h3><?php echo $thank_you_message; ?></h3>
                <?php else: ?>
                    <h3>Choose your payment method below:</h3>
                    
                    <!-- Payment Method Selection Form -->
                    <form action="order_confirmation.php" method="post">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="payment_option" value="card" required>
                                Credit/Debit Card
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="payment_option" value="online">
                                Online Payment
                            </label>
                        </div>
                        <button type="submit" class="   "><a href="order.php">Confirm Payment Method</a></button>
                    </form>
                <?php endif; ?>
                
                
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- Footer ends -->
</body>

<!-- Scripts for Bootstrap and jQuery -->
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

<!-- Error Handling Scripts -->
<?php 
if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
        $(document).ready(function(){
            $('#signup').modal('show');
        });
    </script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
}

if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
        $(document).ready(function(){
            $('#login').modal('show');
        });
    </script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
}
?>
</html>
