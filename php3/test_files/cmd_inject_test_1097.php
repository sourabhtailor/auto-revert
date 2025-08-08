<?php
// Command Injection test variation #1097
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>