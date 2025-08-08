<?php
// Command Injection test variation #1092
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>