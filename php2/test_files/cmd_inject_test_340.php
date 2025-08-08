<?php
// Command Injection test variation #340
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>