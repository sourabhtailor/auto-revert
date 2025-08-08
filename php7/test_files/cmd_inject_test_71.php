<?php
// Command Injection test variation #71
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>