<?php
session_start();
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb+srv://sanganidhruvi2006:Sangani.11@cluster0.7ixtd.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->Mongodb->test; 

$id = $_GET['id'];
$document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <h1>Update Document</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $document['_id']->__toString(); ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $document['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $document['email']; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $document['age']; ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
