<?php
// Command Injection test variation #947
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>