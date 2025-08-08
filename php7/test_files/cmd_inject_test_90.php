<?php
// Command Injection test variation #90
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>