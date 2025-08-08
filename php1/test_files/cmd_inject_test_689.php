<?php
// Command Injection test variation #689
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>