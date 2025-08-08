<?php
// Command Injection test variation #58
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>