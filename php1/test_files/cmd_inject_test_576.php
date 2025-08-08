<?php
// Command Injection test variation #576
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>