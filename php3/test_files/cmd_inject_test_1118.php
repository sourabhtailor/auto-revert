<?php
// Command Injection test variation #1118
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>