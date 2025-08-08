<?php
// Command Injection test variation #79
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>