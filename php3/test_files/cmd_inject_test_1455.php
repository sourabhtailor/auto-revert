<?php
// Command Injection test variation #1455
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>