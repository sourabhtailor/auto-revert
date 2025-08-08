<?php
// Command Injection test variation #1461
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>