<?php
// Command Injection test variation #1087
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>