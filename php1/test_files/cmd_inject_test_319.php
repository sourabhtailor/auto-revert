<?php
// Command Injection test variation #319
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>