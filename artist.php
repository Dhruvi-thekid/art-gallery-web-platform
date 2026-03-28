<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Management </title>
    <link rel="stylesheet" href="artist.css">
</head>

<body>
    <div class="contact-container">
        <h1>Artist Management</h1>
    </div>
</body>
</html>   


<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb+srv://sanganidhruvi2006:Sangani.11@cluster0.7ixtd.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->Mongodb->test; 

$documents = $collection->find();

echo "<h1>Documents in Collection:</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Action</th><th>Action</th></tr>";
foreach ($documents as $document) {
    echo "<tr>";
    echo "<td>{$document['id']}</td>";
    echo "<td>{$document['name']}</td>";
    echo "<td>{$document['email']}</td>";
    echo "<td>{$document['age']}</td>";
    echo "<td><a href='update_form.php?id={$document['_id']}'>Update</a></td>";
    echo "<td><a href='delete.php?id={$document['_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

<html>
    <body>
        <a href="insert_form.php"> Enlist in out artist community</a>
        <a href="home.php"> <center> Go to Home </center></a> 
    </body>
</html>