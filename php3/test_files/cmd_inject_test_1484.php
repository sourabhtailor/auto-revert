<?php
// Command Injection test variation #1484
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>