<?php
// Command Injection test variation #202
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>