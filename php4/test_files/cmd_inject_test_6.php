<?php
// Command Injection test variation #6
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>