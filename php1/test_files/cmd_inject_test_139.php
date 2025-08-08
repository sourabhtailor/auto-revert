<?php
// Command Injection test variation #139
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>