<?php
// Command Injection test variation #769
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>