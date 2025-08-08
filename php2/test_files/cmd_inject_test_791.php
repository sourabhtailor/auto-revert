<?php
// Command Injection test variation #791
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>