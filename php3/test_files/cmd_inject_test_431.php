<?php
// Command Injection test variation #431
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>