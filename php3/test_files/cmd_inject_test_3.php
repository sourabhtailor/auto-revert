<?php
// Command Injection test variation #3
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>