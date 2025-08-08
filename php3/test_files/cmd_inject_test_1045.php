<?php
// Command Injection test variation #1045
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>