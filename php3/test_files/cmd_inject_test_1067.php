<?php
// Command Injection test variation #1067
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>