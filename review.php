<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revies Us</title>
    <link rel="stylesheet" href="review.css">
</head>
<body>
    <div class="contact-container">
        <h2>Review Us</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button onclick="myFunction()">submit</button>
            <a href="home.php"> <center> Go to Home </center></a> 
            
        </form>
    </div>

<script>
function myFunction() {
  alert("Message Sent Successfully");
}
</script>

</body>
</html>