<?php
// Command Injection test variation #509
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>