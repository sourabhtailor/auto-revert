<?php
// Command Injection test variation #784
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>