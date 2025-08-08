<?php
// Command Injection test variation #1444
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>