<?php
// Command Injection test variation #1350
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>