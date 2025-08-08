<?php
// Command Injection test variation #398
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>