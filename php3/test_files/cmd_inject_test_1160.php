<?php
// Command Injection test variation #1160
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>