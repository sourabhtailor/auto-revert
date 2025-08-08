<?php
// Command Injection test variation #344
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>