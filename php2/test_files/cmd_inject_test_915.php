<?php
// Command Injection test variation #915
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>