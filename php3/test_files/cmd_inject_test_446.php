<?php
// Command Injection test variation #446
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>