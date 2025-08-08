<?php
// Command Injection test variation #1340
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>