<?php  
require("includes/common.php");
session_start();

// Check if the 'responses' table exists
$sqlCheck = "SHOW TABLES LIKE 'responses'";
$resultCheck = mysqli_query($con, $sqlCheck);
if (!$resultCheck || mysqli_num_rows($resultCheck) === 0) {
    die("Table 'responses' does not exist. Please create it in the database.");
}

// Handling form submission for chatbot messages
$chatResponse = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    $userMessage = strtolower(trim(mysqli_real_escape_string($con, $_POST['message'])));
    
    $sql = "SELECT response FROM responses WHERE LOWER(keyword) LIKE '%$userMessage%' LIMIT 1";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $chatResponse = "Chatbot: " . $row['response'];
    } else {
        $chatResponse = "Chatbot: I'm sorry, I don't understand that. Can you rephrase?";
    }
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sound Store | Online Shopping on Headphones</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">

<?php include 'includes/header_menu.php'; ?>

<div>
  <div class="container mt-5">
    <div class="row justify-content-around">
      <div class="col-md-5 mt-3">
        <h3 class="text-warning pt-3 title">About Us</h3>
        <hr />
        <img src="https://koala.sh/api/image/v2-342k5-zuy7s.jpg?width=1216&height=832&dream" class="img-fluid d-block rounded mx-auto image-thumbnail">
        <p class="mt-2">
          At Sound Store, we are dedicated to transforming the shopping experience by embracing the modern shift towards e-commerce...
        </p>
      </div>
      <div class="col-md-5 mt-3">
        <span class="text-warning pt-3">
          <h1 class="title">LIVE SUPPORT</h1>
          <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
        </span>
        <hr>
        <p>In response to the increasing demand for efficient e-commerce solutions, Sound Store is proud to offer a comprehensive suite of services designed to enhance both the shopping and delivery experience...</p>
      </div>
    </div>
  </div>
</div>

<div class="container pb-3"></div>
<div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">
  <form class="col-md-12" action="" method="POST">
    <h3 class="text-warning pt-3 title mx-auto">Chatbot</h3>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
  <div id="chatResponse" class="mt-3">
    <?php
      if (!empty($chatResponse)) {
          echo $chatResponse;
      }
    ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>