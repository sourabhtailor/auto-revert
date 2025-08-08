<?php
// Command Injection test variation #1016
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>