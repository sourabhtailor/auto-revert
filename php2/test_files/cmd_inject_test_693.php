<?php
// Command Injection test variation #693
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>