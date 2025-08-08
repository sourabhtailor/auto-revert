<?php
// Command Injection test variation #1277
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>