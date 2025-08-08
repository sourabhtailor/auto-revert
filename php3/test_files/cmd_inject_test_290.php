<?php
// Command Injection test variation #290
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>