<?php
// Command Injection test variation #1235
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>