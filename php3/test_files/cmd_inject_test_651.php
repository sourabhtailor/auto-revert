<?php
// Command Injection test variation #651
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>