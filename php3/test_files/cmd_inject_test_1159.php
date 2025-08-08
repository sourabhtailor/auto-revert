<?php
// Command Injection test variation #1159
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>