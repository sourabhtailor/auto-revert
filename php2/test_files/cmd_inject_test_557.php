<?php
// Command Injection test variation #557
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>