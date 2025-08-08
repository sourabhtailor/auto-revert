<?php
// Command Injection test variation #1166
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>