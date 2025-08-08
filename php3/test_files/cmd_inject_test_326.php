<?php
// Command Injection test variation #326
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>