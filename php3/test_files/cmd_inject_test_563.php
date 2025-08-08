<?php
// Command Injection test variation #563
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>