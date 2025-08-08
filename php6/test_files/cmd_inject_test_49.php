<?php
// Command Injection test variation #49
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>