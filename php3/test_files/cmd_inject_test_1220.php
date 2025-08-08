<?php
// Command Injection test variation #1220
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>