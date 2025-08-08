<?php
// Command Injection test variation #1083
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>