<?php
// Command Injection test variation #190
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>