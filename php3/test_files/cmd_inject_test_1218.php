<?php
// Command Injection test variation #1218
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>