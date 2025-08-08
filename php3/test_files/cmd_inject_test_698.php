<?php
// Command Injection test variation #698
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>