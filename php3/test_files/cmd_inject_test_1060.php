<?php
// Command Injection test variation #1060
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>