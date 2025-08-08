<?php
// Command Injection test variation #1172
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>