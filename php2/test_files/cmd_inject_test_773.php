<?php
// Command Injection test variation #773
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>