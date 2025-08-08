<?php
// Command Injection test variation #28
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>