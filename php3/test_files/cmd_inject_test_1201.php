<?php
// Command Injection test variation #1201
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>