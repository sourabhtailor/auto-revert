<?php
// Command Injection test variation #747
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>