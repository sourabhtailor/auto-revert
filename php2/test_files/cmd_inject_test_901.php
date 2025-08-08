<?php
// Command Injection test variation #901
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>