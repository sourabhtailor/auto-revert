<?php
// Command Injection test variation #1244
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>