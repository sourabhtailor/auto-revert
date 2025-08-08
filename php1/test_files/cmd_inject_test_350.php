<?php
// Command Injection test variation #350
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>