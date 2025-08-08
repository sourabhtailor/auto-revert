<?php
// Command Injection test variation #1416
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>