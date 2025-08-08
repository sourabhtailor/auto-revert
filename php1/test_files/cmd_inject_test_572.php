<?php
// Command Injection test variation #572
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>