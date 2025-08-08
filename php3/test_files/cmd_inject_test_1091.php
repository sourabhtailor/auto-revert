<?php
// Command Injection test variation #1091
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>