<?php
// Command Injection test variation #874
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>