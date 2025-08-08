<?php
// Command Injection test variation #1152
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>