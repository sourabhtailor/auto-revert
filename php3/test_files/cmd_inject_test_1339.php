<?php
// Command Injection test variation #1339
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>