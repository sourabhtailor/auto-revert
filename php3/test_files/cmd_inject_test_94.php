<?php
// Command Injection test variation #94
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>