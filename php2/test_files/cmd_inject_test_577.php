<?php
// Command Injection test variation #577
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>