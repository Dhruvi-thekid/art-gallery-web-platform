<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <form action="insert.php" method="post">
        <label for="ID">ID:</label>
        <input type="text" id="ID" name="ID" required><br>

        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br>

        <label for="Email">Email:</label>
        <input type="text" id="Email" name="Email" required><br>

        <label for="Age">Age:</label>
        <input type="text" id="Age" name="Age" required><br>

        <button type="submit">Insert</button>
    </form>
</body>
</html>