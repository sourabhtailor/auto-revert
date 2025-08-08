<?php
// Command Injection test variation #1337
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>