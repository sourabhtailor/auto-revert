<?php
// Command Injection test variation #1148
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>