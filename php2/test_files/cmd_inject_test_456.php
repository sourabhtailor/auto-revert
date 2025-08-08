<?php
// Command Injection test variation #456
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>