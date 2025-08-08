<?php
// Command Injection test variation #392
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>