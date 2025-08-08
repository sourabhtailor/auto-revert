<?php
// Command Injection test variation #993
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>