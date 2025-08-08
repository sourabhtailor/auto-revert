<?php
// Command Injection test variation #582
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>