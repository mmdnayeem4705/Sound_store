<?php  
$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "ecommerce";  // Updated to use the ecommerce database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {  
    echo "Failed to Connect: " . $conn->connect_error;  
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = $_POST['message'];
    
    // Basic sanitization
    $userMessage = $conn->real_escape_string($userMessage);
    
    // Query for a response that matches the user's input
    $sql = "SELECT response FROM responses WHERE keyword LIKE '%$userMessage%' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the first matching response
        $row = $result->fetch_assoc();
        echo "Chatbot: " . $row['response'];
    } else {
        echo "Chatbot: I'm sorry, I don't understand that. Can you rephrase?";
    }
}

// Close the connection
$conn->close();  
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