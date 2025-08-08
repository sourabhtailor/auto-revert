<?php
// Command Injection test variation #273
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>