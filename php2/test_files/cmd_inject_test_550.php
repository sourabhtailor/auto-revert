<?php
// Command Injection test variation #550
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>