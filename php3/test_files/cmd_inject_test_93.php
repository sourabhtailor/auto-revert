<?php
// Command Injection test variation #93
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>