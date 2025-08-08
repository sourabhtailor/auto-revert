<?php
// Command Injection test variation #511
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>