<?php
// Command Injection test variation #100
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>