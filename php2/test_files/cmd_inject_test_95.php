<?php
// Command Injection test variation #95
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>