<?php
// Command Injection test variation #1044
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>