<?php
// Command Injection test variation #16
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>