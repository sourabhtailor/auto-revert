<?php
// Command Injection test variation #854
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>