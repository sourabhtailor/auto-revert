<?php
// Command Injection test variation #1147
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>