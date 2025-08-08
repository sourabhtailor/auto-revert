<?php
// Command Injection test variation #114
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>