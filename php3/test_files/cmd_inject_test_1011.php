<?php
// Command Injection test variation #1011
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>