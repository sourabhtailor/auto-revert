<?php
// Command Injection test variation #349
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>