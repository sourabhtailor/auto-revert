<?php
// Command Injection test variation #1190
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>