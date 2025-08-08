<?php
// Command Injection test variation #1015
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>