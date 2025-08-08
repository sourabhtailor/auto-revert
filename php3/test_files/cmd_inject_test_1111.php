<?php
// Command Injection test variation #1111
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>