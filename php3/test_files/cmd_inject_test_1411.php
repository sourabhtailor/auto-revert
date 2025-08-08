<?php
// Command Injection test variation #1411
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>