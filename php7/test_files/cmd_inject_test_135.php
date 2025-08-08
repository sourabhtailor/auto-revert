<?php
// Command Injection test variation #135
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>