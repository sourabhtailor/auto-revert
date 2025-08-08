<?php
// Command Injection test variation #1378
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>