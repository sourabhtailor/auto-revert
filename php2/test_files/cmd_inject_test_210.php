<?php
// Command Injection test variation #210
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>