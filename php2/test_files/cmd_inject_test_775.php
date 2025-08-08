<?php
// Command Injection test variation #775
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>