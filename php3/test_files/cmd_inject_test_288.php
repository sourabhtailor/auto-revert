<?php
// Command Injection test variation #288
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>