<?php
// Command Injection test variation #388
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>