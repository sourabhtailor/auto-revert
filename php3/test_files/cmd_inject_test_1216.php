<?php
// Command Injection test variation #1216
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>