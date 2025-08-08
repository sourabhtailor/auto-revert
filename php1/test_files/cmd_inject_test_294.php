<?php
// Command Injection test variation #294
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>