<?php
// Command Injection test variation #745
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>