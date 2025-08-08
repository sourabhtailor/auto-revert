<?php
// Command Injection test variation #1228
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>