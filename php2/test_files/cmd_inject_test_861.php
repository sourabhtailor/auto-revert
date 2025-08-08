<?php
// Command Injection test variation #861
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>