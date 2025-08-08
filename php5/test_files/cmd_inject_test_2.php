<?php
// Command Injection test variation #2
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>