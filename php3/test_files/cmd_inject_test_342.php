<?php
// Command Injection test variation #342
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>