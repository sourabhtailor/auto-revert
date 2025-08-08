<?php
// Command Injection test variation #107
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>