<?php
// Command Injection test variation #1141
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>