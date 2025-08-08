<?php
// Command Injection test variation #1418
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>