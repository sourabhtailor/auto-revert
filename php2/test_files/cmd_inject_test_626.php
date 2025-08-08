<?php
// Command Injection test variation #626
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>