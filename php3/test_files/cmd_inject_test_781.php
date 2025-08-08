<?php
// Command Injection test variation #781
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>