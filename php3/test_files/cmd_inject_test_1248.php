<?php
// Command Injection test variation #1248
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>