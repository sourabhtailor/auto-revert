<?php
// Command Injection test variation #1074
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>