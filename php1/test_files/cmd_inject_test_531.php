<?php
// Command Injection test variation #531
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>