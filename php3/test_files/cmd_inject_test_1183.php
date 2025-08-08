<?php
// Command Injection test variation #1183
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>