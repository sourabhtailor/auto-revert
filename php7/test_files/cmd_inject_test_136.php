<?php
// Command Injection test variation #136
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>