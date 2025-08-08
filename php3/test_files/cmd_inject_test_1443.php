<?php
// Command Injection test variation #1443
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>