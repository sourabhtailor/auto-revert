<?php
// Command Injection test variation #448
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>