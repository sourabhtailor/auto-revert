<?php
// Command Injection test variation #1377
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>