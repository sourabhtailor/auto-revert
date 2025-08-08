<?php
// Command Injection test variation #690
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>