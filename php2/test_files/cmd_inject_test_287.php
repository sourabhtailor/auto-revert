<?php
// Command Injection test variation #287
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>