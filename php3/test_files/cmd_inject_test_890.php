<?php
// Command Injection test variation #890
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>