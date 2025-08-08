<?php
// Command Injection test variation #445
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>