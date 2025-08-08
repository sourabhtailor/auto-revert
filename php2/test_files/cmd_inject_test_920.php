<?php
// Command Injection test variation #920
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>