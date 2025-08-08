<?php
// Command Injection test variation #120
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>