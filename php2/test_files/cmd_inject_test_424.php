<?php
// Command Injection test variation #424
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>