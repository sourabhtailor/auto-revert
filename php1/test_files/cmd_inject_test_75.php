<?php
// Command Injection test variation #75
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>