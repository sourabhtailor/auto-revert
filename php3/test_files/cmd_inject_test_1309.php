<?php
// Command Injection test variation #1309
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>