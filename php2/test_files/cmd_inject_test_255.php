<?php
// Command Injection test variation #255
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>