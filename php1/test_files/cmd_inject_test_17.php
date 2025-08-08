<?php
// Command Injection test variation #17
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>