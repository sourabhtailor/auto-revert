<?php
// Command Injection test variation #271
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>