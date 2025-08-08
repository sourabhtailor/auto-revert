<?php
// Command Injection test variation #208
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>