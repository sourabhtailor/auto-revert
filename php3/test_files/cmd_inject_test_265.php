<?php
// Command Injection test variation #265
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>