<?php
// Command Injection test variation #1320
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>