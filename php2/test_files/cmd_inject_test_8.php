<?php
// Command Injection test variation #8
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>