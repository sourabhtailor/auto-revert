<?php
// Command Injection test variation #1487
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>