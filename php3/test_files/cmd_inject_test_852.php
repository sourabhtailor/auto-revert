<?php
// Command Injection test variation #852
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>