<?php
// Command Injection test variation #122
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>