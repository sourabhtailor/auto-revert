<?php
// Command Injection test variation #1406
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>