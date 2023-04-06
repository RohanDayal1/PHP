<?php
function generatePassword($length) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $password = '';
  for ($i = 0; $i < $length; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $password .= $characters[$index];
  }
  return $password;
}

// Generate a 10-character password
$password = generatePassword(10);
echo"Willekeurig wachtwoord van 10 tekens: " .  $password;
?>