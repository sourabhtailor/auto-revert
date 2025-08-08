<?php
// Command Injection test variation #1253
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>