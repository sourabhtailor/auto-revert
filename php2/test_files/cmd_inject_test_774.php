<?php
// Command Injection test variation #774
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>