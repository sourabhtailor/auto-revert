<?php
// Command Injection test variation #322
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>