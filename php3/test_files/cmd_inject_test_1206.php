<?php
// Command Injection test variation #1206
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>