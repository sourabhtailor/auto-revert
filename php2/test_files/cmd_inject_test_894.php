<?php
// Command Injection test variation #894
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>