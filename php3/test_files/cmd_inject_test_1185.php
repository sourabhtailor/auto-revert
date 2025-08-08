<?php
// Command Injection test variation #1185
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>