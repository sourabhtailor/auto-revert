<?php
// Command Injection test variation #132
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>