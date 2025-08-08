<?php
// Command Injection test variation #1217
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>