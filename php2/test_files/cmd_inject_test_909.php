<?php
// Command Injection test variation #909
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>