<?php
// Command Injection test variation #1043
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>