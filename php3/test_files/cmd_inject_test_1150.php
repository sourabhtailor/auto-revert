<?php
// Command Injection test variation #1150
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>