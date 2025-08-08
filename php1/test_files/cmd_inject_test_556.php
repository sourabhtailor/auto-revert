<?php
// Command Injection test variation #556
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>