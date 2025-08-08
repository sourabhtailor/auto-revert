<?php
// Command Injection test variation #1328
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>