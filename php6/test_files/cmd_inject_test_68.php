<?php
// Command Injection test variation #68
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>