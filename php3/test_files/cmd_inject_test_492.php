<?php
// Command Injection test variation #492
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>