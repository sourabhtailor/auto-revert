<?php
// Command Injection test variation #1344
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>