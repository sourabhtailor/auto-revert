<?php
// Command Injection test variation #34
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>