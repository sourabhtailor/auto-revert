<?php
// Command Injection test variation #351
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>