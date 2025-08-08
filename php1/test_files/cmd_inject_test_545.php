<?php
// Command Injection test variation #545
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>