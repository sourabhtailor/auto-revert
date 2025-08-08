<?php
// Command Injection test variation #600
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>