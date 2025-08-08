<?php
// Command Injection test variation #461
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>