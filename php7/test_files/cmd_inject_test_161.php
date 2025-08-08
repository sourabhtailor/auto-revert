<?php
// Command Injection test variation #161
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>