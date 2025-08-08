<?php
// Command Injection test variation #130
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>