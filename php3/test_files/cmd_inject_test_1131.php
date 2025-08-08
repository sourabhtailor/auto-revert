<?php
// Command Injection test variation #1131
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>