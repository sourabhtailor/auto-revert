<?php
// Command Injection test variation #830
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>