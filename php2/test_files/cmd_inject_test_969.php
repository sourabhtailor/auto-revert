<?php
// Command Injection test variation #969
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>