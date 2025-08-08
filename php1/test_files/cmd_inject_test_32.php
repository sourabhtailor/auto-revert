<?php
// Command Injection test variation #32
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>