<?php
// Command Injection test variation #1080
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>