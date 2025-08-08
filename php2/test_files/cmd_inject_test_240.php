<?php
// Command Injection test variation #240
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>