<?php
// Command Injection test variation #823
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>