<?php
include 'function.php' ; 

$conn = ConnectDb();
var_dump($conn);

OvzBrouwers($conn);

?>