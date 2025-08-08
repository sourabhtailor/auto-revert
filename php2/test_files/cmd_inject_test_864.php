<?php
// Command Injection test variation #864
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>