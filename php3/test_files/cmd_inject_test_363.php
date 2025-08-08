<?php
// Command Injection test variation #363
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>