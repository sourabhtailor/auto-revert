<?php
// Command Injection test variation #116
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>