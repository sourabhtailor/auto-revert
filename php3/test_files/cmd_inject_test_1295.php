<?php
// Command Injection test variation #1295
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>