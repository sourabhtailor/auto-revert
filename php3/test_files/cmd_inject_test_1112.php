<?php
// Command Injection test variation #1112
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>