<?php
// Command Injection test variation #27
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>