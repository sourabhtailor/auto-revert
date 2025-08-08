<?php
// Command Injection test variation #778
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>