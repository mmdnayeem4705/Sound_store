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
<!DOCTYPE html>
<html lang="en">
<?php
require("includes/common.php");
session_start();
?>

<head>
    <meta charset="utf-8">
    <title>Order History</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="container">
            <h2 class="mt-5">Order History</h2>
            <?php
            // Check if the user is logged in
            if (!isset($_SESSION['user_id'])) {
                echo "<p>Please log in to view your order history.</p>";
            } else {
                $user_id = $_SESSION['user_id'];

                // Query to fetch order details
                $query = "
                    SELECT u.first_name, u.last_name, up.item_id, up.status
                    FROM users u
                    JOIN users_products up ON u.id = up.user_id
                    WHERE u.id = '$user_id'
                ";
                $result = mysqli_query($con, $query);

                // Check if any orders exist for the user
                if (mysqli_num_rows($result) > 0) {
                    echo "<table class='table table-bordered mt-4'>";
                    echo "<thead><tr><th>First Name</th><th>Last Name</th><th>Item ID</th><th>Status</th></tr></thead><tbody>";

                    // Display order details
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['item_id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                        echo "</tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    echo "<p>No order details found.</p>";
                }
            }
            ?>
        </div>
    </div>

    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
