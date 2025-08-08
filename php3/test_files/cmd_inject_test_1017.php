<?php
// Command Injection test variation #1017
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>