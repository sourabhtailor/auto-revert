<?php
// Command Injection test variation #616
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>