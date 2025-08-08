<?php
// Command Injection test variation #808
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>