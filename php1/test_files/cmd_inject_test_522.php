<?php
// Command Injection test variation #522
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>