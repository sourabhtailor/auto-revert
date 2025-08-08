<?php
// Command Injection test variation #1435
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>