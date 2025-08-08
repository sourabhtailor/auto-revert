<?php
// Command Injection test variation #1022
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>