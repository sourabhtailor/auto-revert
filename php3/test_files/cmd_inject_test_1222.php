<?php
// Command Injection test variation #1222
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>