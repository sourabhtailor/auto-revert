<?php
// Command Injection test variation #1198
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>