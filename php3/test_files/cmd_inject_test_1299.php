<?php
// Command Injection test variation #1299
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>