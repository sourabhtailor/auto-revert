<?php
// Command Injection test variation #133
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>