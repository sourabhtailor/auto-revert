<?php
// Command Injection test variation #1028
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>