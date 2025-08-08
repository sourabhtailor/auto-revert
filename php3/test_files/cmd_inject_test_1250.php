<?php
// Command Injection test variation #1250
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>