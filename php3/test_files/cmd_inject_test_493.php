<?php
// Command Injection test variation #493
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>