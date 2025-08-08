<?php
// Command Injection test variation #1013
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>