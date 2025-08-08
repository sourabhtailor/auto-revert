<?php
// Command Injection test variation #250
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>