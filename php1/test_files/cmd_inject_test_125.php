<?php
// Command Injection test variation #125
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>