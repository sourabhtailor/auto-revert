<?php
// Command Injection test variation #1439
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>