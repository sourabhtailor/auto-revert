<?php
// Command Injection test variation #1424
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>