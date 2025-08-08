<?php
// Command Injection test variation #598
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>