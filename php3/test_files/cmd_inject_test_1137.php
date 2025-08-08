<?php
// Command Injection test variation #1137
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>