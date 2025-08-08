<?php
// Command Injection test variation #1441
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>