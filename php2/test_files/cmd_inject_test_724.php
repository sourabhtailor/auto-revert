<?php
// Command Injection test variation #724
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>