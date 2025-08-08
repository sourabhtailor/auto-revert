<?php
// Command Injection test variation #390
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>