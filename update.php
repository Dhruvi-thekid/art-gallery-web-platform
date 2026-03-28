<?php
session_start();
require 'vendor/autoload.php'; 


$client = new MongoDB\Client("mongodb+srv://sanganidhruvi2006:Sangani.11@cluster0.7ixtd.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->Mongodb->test; 

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = (int)$_POST['age'];

$filter = ['_id' => new MongoDB\BSON\ObjectId($id)]; 

$update = [
    '$set' => [
        'name' => $name,
        'email' => $email,
        'age' => $age
    ]
];

$result = $collection->updateOne( $filter,$update);

echo "Matched {$result->getMatchedCount()} document(s) and modified {$result->getModifiedCount()} document(s)";
header("Location: artist.php");   
?>