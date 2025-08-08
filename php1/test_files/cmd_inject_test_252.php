<?php
// Command Injection test variation #252
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>