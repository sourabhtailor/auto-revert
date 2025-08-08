<?php
// Command Injection test variation #1307
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>