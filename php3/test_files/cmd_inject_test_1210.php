<?php
// Command Injection test variation #1210
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>