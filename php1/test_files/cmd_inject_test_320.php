<?php
// Command Injection test variation #320
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>