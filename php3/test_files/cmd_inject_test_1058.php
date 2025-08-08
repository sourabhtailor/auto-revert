<?php
// Command Injection test variation #1058
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>