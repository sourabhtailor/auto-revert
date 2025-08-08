<?php
// Command Injection test variation #749
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>