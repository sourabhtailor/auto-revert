<?php
// Command Injection test variation #189
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>