<?php
// Command Injection test variation #1109
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>