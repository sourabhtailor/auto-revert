<?php
// Command Injection test variation #197
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>