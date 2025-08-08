<?php
// Command Injection test variation #1008
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>