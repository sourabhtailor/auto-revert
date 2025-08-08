<?php
// Command Injection test variation #257
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>