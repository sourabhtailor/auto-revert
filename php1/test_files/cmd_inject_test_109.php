<?php
// Command Injection test variation #109
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>