<?php
// Command Injection test variation #936
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>