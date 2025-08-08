<?php
// Command Injection test variation #1358
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>