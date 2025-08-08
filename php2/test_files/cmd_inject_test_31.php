<?php
// Command Injection test variation #31
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>