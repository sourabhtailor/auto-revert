<?php
// Command Injection test variation #1010
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>