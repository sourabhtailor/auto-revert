<?php
// Command Injection test variation #463
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>