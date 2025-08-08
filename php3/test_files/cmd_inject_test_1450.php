<?php
// Command Injection test variation #1450
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>