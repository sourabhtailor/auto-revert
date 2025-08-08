<?php
// Command Injection test variation #824
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>