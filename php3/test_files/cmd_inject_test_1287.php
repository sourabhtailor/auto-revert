<?php
// Command Injection test variation #1287
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>