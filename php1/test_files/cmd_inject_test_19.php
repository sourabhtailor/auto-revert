<?php
// Command Injection test variation #19
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>