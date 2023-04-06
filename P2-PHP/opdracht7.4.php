<form method="post">
    <p>Bedrag met korting 
    <input type="text" name="bedrag" value="100"></p>
    <input type="text" name="korting" value="10" readonly>Korting
    <br>
    <input type="submit" name="omzetten" value="Omzetten" >
</form>

<?php
if(isset($_POST['korting'])) {
    $korting = $_POST['korting'];
    $bedrag = $_POST['bedrag'];

        $som = $bedrag / 100 * $korting;
        $nieuwbedrag = $bedrag - $som;
        echo " Bedrag met korting : &euro; $nieuwbedrag,-";
 }

?>
