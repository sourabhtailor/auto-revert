<?php
// Command Injection test variation #470
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>