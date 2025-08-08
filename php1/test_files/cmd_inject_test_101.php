<?php
// Command Injection test variation #101
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>