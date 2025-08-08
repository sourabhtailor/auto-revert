<?php
// Command Injection test variation #1176
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>