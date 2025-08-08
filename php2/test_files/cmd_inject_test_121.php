<?php
// Command Injection test variation #121
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>