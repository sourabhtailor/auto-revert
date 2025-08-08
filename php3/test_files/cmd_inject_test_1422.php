<?php
// Command Injection test variation #1422
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>