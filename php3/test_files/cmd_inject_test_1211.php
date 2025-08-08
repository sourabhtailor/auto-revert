<?php
// Command Injection test variation #1211
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>