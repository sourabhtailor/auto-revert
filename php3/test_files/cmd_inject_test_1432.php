<?php
// Command Injection test variation #1432
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>