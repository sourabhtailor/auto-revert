<?php
// Command Injection test variation #523
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>