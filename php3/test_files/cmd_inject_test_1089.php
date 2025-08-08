<?php
// Command Injection test variation #1089
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>