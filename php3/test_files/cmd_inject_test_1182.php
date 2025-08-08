<?php
// Command Injection test variation #1182
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>