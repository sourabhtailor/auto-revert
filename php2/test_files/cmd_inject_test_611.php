<?php
// Command Injection test variation #611
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>