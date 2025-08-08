<?php
// Command Injection test variation #1434
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>