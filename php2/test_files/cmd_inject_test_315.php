<?php
// Command Injection test variation #315
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>