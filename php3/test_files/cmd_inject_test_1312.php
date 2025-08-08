<?php
// Command Injection test variation #1312
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>