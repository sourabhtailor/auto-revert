<?php
// Command Injection test variation #855
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>