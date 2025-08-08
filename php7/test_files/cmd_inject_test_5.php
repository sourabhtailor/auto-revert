<?php
// Command Injection test variation #5
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>