<?php
// Command Injection test variation #1106
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>