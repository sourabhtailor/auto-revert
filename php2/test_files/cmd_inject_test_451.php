<?php
// Command Injection test variation #451
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>