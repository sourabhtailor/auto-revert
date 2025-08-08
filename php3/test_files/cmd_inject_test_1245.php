<?php
// Command Injection test variation #1245
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>