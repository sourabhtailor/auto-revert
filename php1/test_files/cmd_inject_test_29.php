<?php
// Command Injection test variation #29
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>