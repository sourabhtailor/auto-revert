<?php
// Command Injection test variation #516
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>