<?php
// Command Injection test variation #50
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>