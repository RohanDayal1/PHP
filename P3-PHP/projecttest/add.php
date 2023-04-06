<?php
// connect database 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gastenboek";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password) ;
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

// Prepare SQL statement using PDO
$stmt = $conn->prepare('INSERT INTO lorems (Categorie, Beschrijving) VALUES (:Categorie, :Beschrijving)');

// Assign category data to variables
$Categorie = "Category Name";
$Beschrijving = "Category Description";

// Bind category data to SQL parameters
$stmt->bindParam(':Categorie', $Categorie);
$stmt->bindParam(':Beschrijving', $Beschrijving);

// Execute SQL statement to insert new category
$stmt->execute();
?>
