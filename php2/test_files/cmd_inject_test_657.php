<?php
// Command Injection test variation #657
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>