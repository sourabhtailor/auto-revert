<?php
// Command Injection test variation #719
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>