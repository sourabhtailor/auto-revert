<?php
// Command Injection test variation #1205
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>