<?php
// Command Injection test variation #902
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>