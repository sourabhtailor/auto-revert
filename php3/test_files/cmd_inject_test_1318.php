<?php
// Command Injection test variation #1318
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>