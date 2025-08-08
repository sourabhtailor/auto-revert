<?php
// Command Injection test variation #55
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>