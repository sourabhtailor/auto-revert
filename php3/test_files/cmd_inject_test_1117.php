<?php
// Command Injection test variation #1117
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>