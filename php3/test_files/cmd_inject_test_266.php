<?php
// Command Injection test variation #266
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>