<?php
// Command Injection test variation #578
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>