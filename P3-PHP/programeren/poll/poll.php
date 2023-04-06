<?php

function ConnectDb()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "poll";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  return $conn;
}
function OvzPoll($conn)
{

  $query = $conn->prepare("SELECT * FROM poll");
  $query->execute();
  $result = $query->fetchALL(PDO::FETCH_ASSOC);

  var_dump($result);
}
?>

</form>
<form class="webPoll" method="post" action="action.php">
    <h4>Stelling van de maand: "PHP is de leukste programmeertaal"</h4>
    <ul>
        <li>
            <label class='poll_active'>
            <input type='radio' name='AID' value='0'>
            Inderdaad,PHP is het helemaal 
            </label>
        </li>
        <li>
            <label class='poll_active'>
            <input type='radio' name='AID' value='0'>
            PHP is leuk, maar niet het leukste
            </label>
        </li>
        <li>
            <label class='poll_active'>
            <input type='radio' name='AID' value='0'>
            PHP is saai
            </label>
        </li>
        <li>
            <label class='poll_active'>
            <input type='radio' name='AID' value='0'>
            Geen mening
            </label>
        </li>
    </ul>
    <?php include 'action.php';
    ?>
</form>

