<?php
// Command Injection test variation #426
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>