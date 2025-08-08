<?php
// Command Injection test variation #233
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>