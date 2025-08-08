<?php
// Command Injection test variation #67
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>