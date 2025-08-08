<?php
// Command Injection test variation #571
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>