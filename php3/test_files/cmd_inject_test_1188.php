<?php
// Command Injection test variation #1188
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>