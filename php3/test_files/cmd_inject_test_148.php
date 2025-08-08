<?php
// Command Injection test variation #148
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>