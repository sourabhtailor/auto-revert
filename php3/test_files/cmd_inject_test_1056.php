<?php
// Command Injection test variation #1056
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>