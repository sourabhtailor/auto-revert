<?php
// Command Injection test variation #1304
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>