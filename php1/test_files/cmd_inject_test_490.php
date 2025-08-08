<?php
// Command Injection test variation #490
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>