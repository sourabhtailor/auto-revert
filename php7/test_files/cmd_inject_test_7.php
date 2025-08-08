<?php
// Command Injection test variation #7
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>