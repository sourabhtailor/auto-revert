<?php
// Command Injection test variation #950
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>