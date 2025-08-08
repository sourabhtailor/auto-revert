<?php
// Command Injection test variation #185
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>