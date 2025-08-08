<?php
// Command Injection test variation #10
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>