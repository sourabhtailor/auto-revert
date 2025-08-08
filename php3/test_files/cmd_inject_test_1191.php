<?php
// Command Injection test variation #1191
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>