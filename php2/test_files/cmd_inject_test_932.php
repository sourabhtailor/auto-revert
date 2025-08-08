<?php
// Command Injection test variation #932
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>