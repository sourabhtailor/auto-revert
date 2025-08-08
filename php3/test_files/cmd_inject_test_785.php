<?php
// Command Injection test variation #785
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>