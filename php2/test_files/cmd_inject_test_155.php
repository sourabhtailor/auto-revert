<?php
// Command Injection test variation #155
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>