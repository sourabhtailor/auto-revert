<?php
// Command Injection test variation #200
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>