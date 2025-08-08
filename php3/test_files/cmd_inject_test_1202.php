<?php
// Command Injection test variation #1202
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>