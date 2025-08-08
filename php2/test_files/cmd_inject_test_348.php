<?php
// Command Injection test variation #348
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>