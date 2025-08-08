<?php
// Command Injection test variation #559
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>