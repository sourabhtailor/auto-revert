<?php
// Command Injection test variation #647
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>