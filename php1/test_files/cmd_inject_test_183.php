<?php
// Command Injection test variation #183
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>