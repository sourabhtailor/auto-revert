<?php
// Command Injection test variation #1212
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>