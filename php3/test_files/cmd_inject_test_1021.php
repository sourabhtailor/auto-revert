<?php
// Command Injection test variation #1021
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>