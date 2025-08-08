<?php
// Command Injection test variation #1081
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>