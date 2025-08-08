<?php
// Command Injection test variation #1456
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>