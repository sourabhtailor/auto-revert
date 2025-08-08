<?php
// Command Injection test variation #371
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>