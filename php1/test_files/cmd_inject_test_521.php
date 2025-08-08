<?php
// Command Injection test variation #521
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>