<?php
// Command Injection test variation #425
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>