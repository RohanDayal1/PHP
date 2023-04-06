<h1>Zet hier je tekst om</h1>
<form action="">
    <input type="text" name="Teksveld" placeholder="Voer een text in."></br>
    <input type="radio" name="Letters" value="Hoofdletters">In hoofdletters</br>
    <input type="radio" name="Letters" value="KleineLetters">In kleine letters</br>
    <input type="radio" name="Letters" value="EersteHoofdletter">Eerste letter hoofdletter</br>
    <input type="radio" name="Letters" value="ElkWoordHoofdletter">Eerste letter ieder woord hoofdletter</br>
    <input type="submit" value="verzenden">
</form>
<?php
   if(isset($_GET['Letters'])) {
    if($_GET['Letters'] == 'Hoofdletters') {
        echo strtoupper($_GET['Teksveld']);
    } else if($_GET['Letters'] == 'KleineLetters') {
        echo strtolower($_GET['Teksveld']);
    } else if($_GET['Letters'] == 'EersteHoofdletter') {
        echo ucfirst($_GET['Teksveld']);
    } else if($_GET['Letters'] == 'ElkWoordHoofdletter') {
        echo ucwords($_GET['Teksveld']);
    }
   }
   ?>