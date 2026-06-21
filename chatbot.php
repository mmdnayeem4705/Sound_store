<?php
require("includes/common.php");

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
    <title>Sound Store Chatbot</title>
</head>
<body>
    <h2>Welcome to Sound Store Chatbot</h2>
    <div id="chatbox">
        <form action="" method="post">
            <label for="message">You:</label><br>
            <input type="text" id="message" name="message" required><br><br>
            <input type="submit" value="Send">
        </form>
        <div id="chatResponse">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userMessage = $_POST['message'];
                
                // Simple response logic for demonstration purposes
                if (strtolower($userMessage) == "hello") {
                    echo "Chatbot: Hi! How can I help you with sound-related queries?";
                } elseif (strtolower($userMessage) == "help") {
                    echo "Chatbot: I'm here to assist with finding products, providing information, or answering sound-related questions.";
                } else {
                    echo "Chatbot: Sorry, I didn't understand. Could you rephrase that?";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>