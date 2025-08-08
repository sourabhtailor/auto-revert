<?php
// Command Injection test variation #973
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>