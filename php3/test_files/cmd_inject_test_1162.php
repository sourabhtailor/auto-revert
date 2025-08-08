<?php
// Command Injection test variation #1162
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>