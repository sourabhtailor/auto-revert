<?php
// Command Injection test variation #619
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>