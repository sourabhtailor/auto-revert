<?php
// Command Injection test variation #401
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>