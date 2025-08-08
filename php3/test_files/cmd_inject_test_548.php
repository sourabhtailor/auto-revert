<?php
// Command Injection test variation #548
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>