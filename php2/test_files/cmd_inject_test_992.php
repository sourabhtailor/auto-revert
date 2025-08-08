<?php
// Command Injection test variation #992
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>