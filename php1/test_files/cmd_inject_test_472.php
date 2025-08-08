<?php
// Command Injection test variation #472
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>