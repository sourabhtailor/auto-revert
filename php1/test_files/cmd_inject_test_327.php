<?php
// Command Injection test variation #327
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>