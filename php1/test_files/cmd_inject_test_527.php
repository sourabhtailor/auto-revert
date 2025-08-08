<?php
// Command Injection test variation #527
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>