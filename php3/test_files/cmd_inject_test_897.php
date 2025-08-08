<?php
// Command Injection test variation #897
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>