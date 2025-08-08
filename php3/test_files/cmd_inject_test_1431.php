<?php
// Command Injection test variation #1431
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>