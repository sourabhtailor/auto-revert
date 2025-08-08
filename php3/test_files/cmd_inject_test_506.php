<?php
// Command Injection test variation #506
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>