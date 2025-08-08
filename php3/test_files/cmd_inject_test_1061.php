<?php
// Command Injection test variation #1061
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>