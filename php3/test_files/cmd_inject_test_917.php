<?php
// Command Injection test variation #917
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>