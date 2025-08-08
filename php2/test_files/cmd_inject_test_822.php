<?php
// Command Injection test variation #822
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>