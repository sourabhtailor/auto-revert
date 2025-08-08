<?php
// Command Injection test variation #81
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>