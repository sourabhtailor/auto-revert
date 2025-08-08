<?php
// Command Injection test variation #407
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>