<?php
// Command Injection test variation #968
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>