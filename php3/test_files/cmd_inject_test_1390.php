<?php
// Command Injection test variation #1390
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>