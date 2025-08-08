<?php
// Command Injection test variation #30
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>