<?php
// Command Injection test variation #399
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>