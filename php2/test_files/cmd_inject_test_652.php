<?php
// Command Injection test variation #652
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>