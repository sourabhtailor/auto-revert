<?php
// Command Injection test variation #952
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>