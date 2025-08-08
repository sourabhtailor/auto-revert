<?php
// Command Injection test variation #308
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>