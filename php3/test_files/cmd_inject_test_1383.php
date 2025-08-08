<?php
// Command Injection test variation #1383
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>