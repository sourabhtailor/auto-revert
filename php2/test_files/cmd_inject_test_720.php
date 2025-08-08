<?php
// Command Injection test variation #720
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>