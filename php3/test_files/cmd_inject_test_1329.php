<?php
// Command Injection test variation #1329
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>