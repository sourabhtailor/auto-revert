<?php
// Command Injection test variation #153
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>