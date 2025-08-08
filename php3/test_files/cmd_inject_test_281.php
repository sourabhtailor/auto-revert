<?php
// Command Injection test variation #281
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>