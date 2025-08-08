<?php
// Command Injection test variation #1276
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>