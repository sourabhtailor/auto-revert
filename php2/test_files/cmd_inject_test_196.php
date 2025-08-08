<?php
// Command Injection test variation #196
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>