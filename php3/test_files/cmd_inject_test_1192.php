<?php
// Command Injection test variation #1192
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>