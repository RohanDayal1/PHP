<html>
    <style type= "text/css">
        table{
            border-collapse: collapse;
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
            width: 100px
        }

    </style>
<?php 
try {
$db = new PDO ("mysql:host=localhost;dbname=cijfersysteem", "root", "");

$query = $db->prepare("SELECT * FROM cijfers");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    foreach ($result as $data) {
     echo "<tr>";
        echo "<td>" , $data ["leerling"];  "</td>";
        echo "<td>" , $data ["cijfer"];  "</td>";
     echo "</tr>";
    }
    
    echo "</table>";
} catch(PDOException $e) {
    die("Error!: " . $e->message());
    }

?>
</html>

