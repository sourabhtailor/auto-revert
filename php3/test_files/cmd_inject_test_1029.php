<?php
// Command Injection test variation #1029
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>