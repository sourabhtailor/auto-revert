<?php
// Command Injection test variation #1367
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>