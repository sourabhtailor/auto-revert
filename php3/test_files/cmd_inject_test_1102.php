<?php
// Command Injection test variation #1102
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>