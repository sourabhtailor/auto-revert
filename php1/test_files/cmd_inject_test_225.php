<?php
// Command Injection test variation #225
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>