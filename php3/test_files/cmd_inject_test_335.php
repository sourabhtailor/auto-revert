<?php
// Command Injection test variation #335
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>