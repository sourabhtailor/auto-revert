<?php
// Command Injection test variation #78
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>