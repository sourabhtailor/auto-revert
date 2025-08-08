<?php
// Command Injection test variation #583
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>