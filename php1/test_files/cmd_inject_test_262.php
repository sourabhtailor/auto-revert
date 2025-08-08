<?php
// Command Injection test variation #262
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>