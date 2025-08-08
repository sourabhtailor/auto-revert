<?php
// Command Injection test variation #499
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>