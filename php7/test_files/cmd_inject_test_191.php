<?php
// Command Injection test variation #191
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>