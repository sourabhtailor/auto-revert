<?php
// Command Injection test variation #1496
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>