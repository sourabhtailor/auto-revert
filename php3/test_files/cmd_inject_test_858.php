<?php
// Command Injection test variation #858
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>