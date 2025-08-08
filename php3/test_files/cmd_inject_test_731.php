<?php
// Command Injection test variation #731
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>