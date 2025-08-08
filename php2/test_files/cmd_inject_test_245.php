<?php
// Command Injection test variation #245
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>