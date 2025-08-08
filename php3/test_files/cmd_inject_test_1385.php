<?php
// Command Injection test variation #1385
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>