<?php
// Command Injection test variation #687
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>