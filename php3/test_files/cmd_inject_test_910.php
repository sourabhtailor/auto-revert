<?php
// Command Injection test variation #910
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>