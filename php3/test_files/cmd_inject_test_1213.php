<?php
// Command Injection test variation #1213
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>