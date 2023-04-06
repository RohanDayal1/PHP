<?php
// connect database 
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // get data
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $onderwerp = $_POST['onderwerp'];
  $bericht = $_POST['bericht'];

  // data in de database
  $stmt = $conn->prepare("INSERT INTO feedback (naam, email, onderwerp, bericht) VALUES (:naam, :email, :onderwerp, :bericht)");
  $stmt->bindParam(':naam', $naam);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':onderwerp', $onderwerp);
  $stmt->bindParam(':bericht', $bericht);
  $stmt->execute();

  header('Location: index.php');
  exit;
}
?>
