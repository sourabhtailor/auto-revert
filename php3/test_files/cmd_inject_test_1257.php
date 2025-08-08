<?php
// Command Injection test variation #1257
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>