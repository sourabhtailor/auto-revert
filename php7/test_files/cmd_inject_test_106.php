<?php
// Command Injection test variation #106
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>