<?php
// Command Injection test variation #711
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>