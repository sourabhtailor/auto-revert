<?php
// Command Injection test variation #198
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>