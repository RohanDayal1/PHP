<?php   
 date_default_timezone_set("Europe/Amsterdam");

 $today=date("j F Y");
 echo "Vandaag is het: $today";

 echo"<br>";

 $time = date("H:i");
 echo "Het is nu:$time uur";

 echo"<br>";

 $month = date("F");
 echo "Vandaag is het de 75e dag van het jaar";
 $daysInmonth = date("t");
 echo("<br>");
 echo"Deze maand, $month heeft in totaal 31 dagen";
 
 echo("<br>");

 $week = date ("W");
 echo"Deze week is het week: $week";
 ?>