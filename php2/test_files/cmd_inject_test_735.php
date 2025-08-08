<?php
// Command Injection test variation #735
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>