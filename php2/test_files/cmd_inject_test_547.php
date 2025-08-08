<?php
// Command Injection test variation #547
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>