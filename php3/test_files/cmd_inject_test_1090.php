<?php
// Command Injection test variation #1090
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>