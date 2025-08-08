<?php
// Command Injection test variation #170
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>