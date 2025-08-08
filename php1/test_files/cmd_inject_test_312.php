<?php
// Command Injection test variation #312
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>