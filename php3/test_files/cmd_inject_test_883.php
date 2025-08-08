<?php
// Command Injection test variation #883
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>