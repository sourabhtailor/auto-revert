<?php
// Command Injection test variation #1234
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>