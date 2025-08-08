<?php
// Command Injection test variation #89
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>