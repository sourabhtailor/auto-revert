<?php
// Command Injection test variation #231
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>