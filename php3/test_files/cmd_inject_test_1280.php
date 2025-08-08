<?php
// Command Injection test variation #1280
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>