<?php
// Command Injection test variation #228
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>