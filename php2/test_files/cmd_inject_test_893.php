<?php
// Command Injection test variation #893
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>