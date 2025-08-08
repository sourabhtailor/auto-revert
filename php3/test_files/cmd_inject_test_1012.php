<?php
// Command Injection test variation #1012
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>