<?php
session_start();
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb+srv://sanganidhruvi2006:Sangani.11@cluster0.7ixtd.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->Mongodb->test; 

$id = $_POST['ID'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$age = $_POST['Age'];

$document = [
    'id' => $id,
    'name' => $name,
    'email' => $email,
    'age' => $age
];

$result = $collection->insertOne($document);

echo "Inserted with Object ID '{$result->getInsertedId()}'";
header("Location: artist.php");
?>   