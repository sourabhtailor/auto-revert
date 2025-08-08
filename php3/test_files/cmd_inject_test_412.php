<?php
// Command Injection test variation #412
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>