<?php
// Command Injection test variation #1048
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>