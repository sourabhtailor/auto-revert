<?php
// Command Injection test variation #216
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>