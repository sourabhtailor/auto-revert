<?php
// Command Injection test variation #760
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>