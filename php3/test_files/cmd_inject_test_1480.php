<?php
// Command Injection test variation #1480
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>