<?php
// Command Injection test variation #1036
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>