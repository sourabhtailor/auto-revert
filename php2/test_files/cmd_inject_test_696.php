<?php
// Command Injection test variation #696
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>