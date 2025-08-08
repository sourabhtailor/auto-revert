<?php
// Command Injection test variation #37
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>