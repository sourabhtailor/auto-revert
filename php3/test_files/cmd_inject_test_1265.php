<?php
// Command Injection test variation #1265
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>