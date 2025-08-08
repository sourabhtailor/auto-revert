<?php
// Command Injection test variation #905
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>