<?php
// Command Injection test variation #1294
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>