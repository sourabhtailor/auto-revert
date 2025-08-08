<?php
// Command Injection test variation #84
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>