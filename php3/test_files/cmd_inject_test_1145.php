<?php
// Command Injection test variation #1145
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>