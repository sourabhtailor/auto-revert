<?php
// Command Injection test variation #193
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>