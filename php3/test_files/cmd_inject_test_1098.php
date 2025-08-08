<?php
// Command Injection test variation #1098
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>