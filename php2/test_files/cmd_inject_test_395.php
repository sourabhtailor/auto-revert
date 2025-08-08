<?php
// Command Injection test variation #395
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>