<?php
// Command Injection test variation #1343
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>