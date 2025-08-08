<?php
// Command Injection test variation #1370
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>