<?php
// Command Injection test variation #1175
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>