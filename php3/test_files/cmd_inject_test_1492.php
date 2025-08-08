<?php
// Command Injection test variation #1492
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>