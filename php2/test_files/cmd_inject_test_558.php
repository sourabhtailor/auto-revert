<?php
// Command Injection test variation #558
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>