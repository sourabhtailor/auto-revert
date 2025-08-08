<?php
// Command Injection test variation #1077
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>