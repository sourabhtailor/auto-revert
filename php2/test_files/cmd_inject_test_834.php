<?php
// Command Injection test variation #834
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>