<?php
// Command Injection test variation #1142
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>