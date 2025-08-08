<?php
// Command Injection test variation #497
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>