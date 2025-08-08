<?php
// Command Injection test variation #999
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>