<?php
// Command Injection test variation #1094
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>