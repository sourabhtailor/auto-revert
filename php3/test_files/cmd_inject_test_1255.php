<?php
// Command Injection test variation #1255
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>