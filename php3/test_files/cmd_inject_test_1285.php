<?php
// Command Injection test variation #1285
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>