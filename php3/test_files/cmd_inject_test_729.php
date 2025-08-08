<?php
// Command Injection test variation #729
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>