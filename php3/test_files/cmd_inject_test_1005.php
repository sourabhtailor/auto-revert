<?php
// Command Injection test variation #1005
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>