<?php
// Command Injection test variation #1347
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>