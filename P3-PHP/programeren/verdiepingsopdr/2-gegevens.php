<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$user_agent = preg_replace('/[^\w\s\(\);:\.,\/\\\]+/', '', $user_agent);

echo $user_agent. "<br>";

if (strpos($user_agent, 'Firefox') !== false) {
  $browser = 'Firefox';
} elseif (strpos($user_agent, 'Chrome') !== false) {
  $browser = 'Chrome';
} elseif (strpos($user_agent, 'Safari') !== false) {
  $browser = 'Safari';
} elseif (strpos($user_agent, 'Edge') !== false) {
  $browser = 'Edge';
} elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false) {
  $browser = 'Internet Explorer';
} else {
  $browser = 'Unknown browser';


}
if (strpos($user_agent, 'Windows') !== false) {
  $os = 'Windows';
} elseif (strpos($user_agent, 'Macintosh') !== false) {
  $os = 'Macintosh';
} elseif (strpos($user_agent, 'Linux') !== false) {
  $os = 'Linux';
} elseif (strpos($user_agent, 'iPhone') !== false) {
  $os = 'iPhone';
} elseif (strpos($user_agent, 'iPad') !== false) {
  $os = 'iPad';
} else {
  $os = 'Unknown operating system';
}  

echo 'Internet browser: ' . $browser . '<br>';
echo 'Operating system: ' . $os;
?>
