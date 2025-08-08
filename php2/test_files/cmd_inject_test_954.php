<?php
// Command Injection test variation #954
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>