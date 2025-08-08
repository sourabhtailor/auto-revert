<?php
// Command Injection test variation #358
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>