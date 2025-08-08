<?php
// Command Injection test variation #205
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>