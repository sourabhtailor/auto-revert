<?php
// Command Injection test variation #1055
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>