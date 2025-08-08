<?php
// Command Injection test variation #227
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>