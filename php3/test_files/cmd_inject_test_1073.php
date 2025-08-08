<?php
// Command Injection test variation #1073
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>