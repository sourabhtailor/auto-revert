<?php
// Command Injection test variation #239
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>