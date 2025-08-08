<?php
// Command Injection test variation #396
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>