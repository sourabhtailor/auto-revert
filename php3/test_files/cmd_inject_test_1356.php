<?php
// Command Injection test variation #1356
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>