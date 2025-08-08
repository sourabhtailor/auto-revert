<?php
// Command Injection test variation #848
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>