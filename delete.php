<?php
session_start();

require 'vendor/autoload.php'; 


$client = new MongoDB\Client("mongodb+srv://sanganidhruvi2006:Sangani.11@cluster0.7ixtd.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->Mongodb->test; 

$id = new MongoDB\BSON\ObjectId($_GET['id']);

$filter = ['_id' => $id];

$result = $collection->deleteOne($filter);

echo "Deleted {$result->getDeletedCount()} document(s)";
header ("Location: artist.php");
?>
