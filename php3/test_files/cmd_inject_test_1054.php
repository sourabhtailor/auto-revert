<?php
// Command Injection test variation #1054
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>