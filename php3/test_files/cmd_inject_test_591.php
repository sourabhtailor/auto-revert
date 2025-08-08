<?php
// Command Injection test variation #591
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>