<?php
// Command Injection test variation #1001
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>