<?php
// Command Injection test variation #1430
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>