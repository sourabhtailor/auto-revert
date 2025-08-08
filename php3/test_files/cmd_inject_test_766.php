<?php
// Command Injection test variation #766
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>