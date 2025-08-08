<?php
// Command Injection test variation #103
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>