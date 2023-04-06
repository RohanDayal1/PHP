<h1> Opdracht 6 Hoofdstuk 9: gasten</h1>
<form method="post" action="">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    Bericht <textarea type="text" name="bericht" id="bericht"></textarea></br></br>
    <input type="submit" name="knop" id="knop">
</form>

<?php
include "connectpdo.php";

try {
    // INSERT query uitvoeren
    $stmt = $conn->prepare ("INSERT INTO berichten (naam, bericht, datumtijd)
    VALUES (:naam , :bericht, :datumtijd)");
    $stmt->bindParam (':naam', $naam);
    $stmt->bindParam (':bericht', $bericht);
    $stmt->bindParam (':datumtijd', $datumtijd);

    // insert rij
if (isset($_RESQUEST['naam']))
{
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];
    $datumtijd = Date('d-m-y');
    $stmt->execute();

    // terugsturen naar de hoofdpagina
    header('Location: index.php');
}}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$sqlSelect = "SELECT * from berichten";
$data = $conn->query($sqlSelect);

foreach ($data as $row) {
    echo $row['id']."";
    echo $row['datumtijd']."";
    echo $row['naam']."";
    echo $row['bericht']."";
    //echo "<a href='pdoupdate.php?id=$row[id]'>Bewerken</a>";
    echo "<a href='VerwijderBericht.php? id=$row[id]'>Verwijderen</a>";
    echo "</br>";
}
$conn = null;
?>