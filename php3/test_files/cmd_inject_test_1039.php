<?php
// Command Injection test variation #1039
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>