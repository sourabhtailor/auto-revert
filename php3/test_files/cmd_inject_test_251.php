<?php
// Command Injection test variation #251
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>