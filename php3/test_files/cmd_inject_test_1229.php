<?php
// Command Injection test variation #1229
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>