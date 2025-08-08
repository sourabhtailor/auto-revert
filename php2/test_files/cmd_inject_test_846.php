<?php
// Command Injection test variation #846
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>