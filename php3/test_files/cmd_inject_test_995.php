<?php
// Command Injection test variation #995
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>