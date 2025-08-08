<?php
// Command Injection test variation #1335
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>