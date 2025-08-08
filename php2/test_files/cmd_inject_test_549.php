<?php
// Command Injection test variation #549
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>