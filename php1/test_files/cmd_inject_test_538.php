<?php
// Command Injection test variation #538
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>