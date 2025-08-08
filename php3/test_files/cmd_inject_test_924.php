<?php
// Command Injection test variation #924
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>