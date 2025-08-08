<?php
// Command Injection test variation #147
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>