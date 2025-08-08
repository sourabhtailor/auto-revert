<?php
// Command Injection test variation #217
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>