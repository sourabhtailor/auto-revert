<?php
// Command Injection test variation #80
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>