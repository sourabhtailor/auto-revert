<?php
// Command Injection test variation #169
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>