<?php
// Command Injection test variation #1363
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>