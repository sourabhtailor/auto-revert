<?php
// Command Injection test variation #1199
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>