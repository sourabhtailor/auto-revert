<?php
// Command Injection test variation #53
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>