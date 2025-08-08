<?php
// Command Injection test variation #660
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>