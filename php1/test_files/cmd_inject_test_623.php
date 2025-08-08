<?php
// Command Injection test variation #623
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>