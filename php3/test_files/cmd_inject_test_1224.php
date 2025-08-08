<?php
// Command Injection test variation #1224
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>