<?php
// Command Injection test variation #421
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>