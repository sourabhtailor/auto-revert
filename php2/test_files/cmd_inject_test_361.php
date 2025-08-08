<?php
// Command Injection test variation #361
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>