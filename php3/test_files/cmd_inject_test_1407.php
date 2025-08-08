<?php
// Command Injection test variation #1407
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>