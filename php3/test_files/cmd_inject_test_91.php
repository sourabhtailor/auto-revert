<?php
// Command Injection test variation #91
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>