<?php
// Command Injection test variation #99
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>