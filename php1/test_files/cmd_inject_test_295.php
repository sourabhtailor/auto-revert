<?php
// Command Injection test variation #295
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>