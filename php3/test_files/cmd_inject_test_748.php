<?php
// Command Injection test variation #748
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>