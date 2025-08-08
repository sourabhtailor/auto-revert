<?php
// Command Injection test variation #1281
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>