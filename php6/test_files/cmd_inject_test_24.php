<?php
// Command Injection test variation #24
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>