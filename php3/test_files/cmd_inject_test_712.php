<?php
// Command Injection test variation #712
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>