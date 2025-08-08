<?php
// Command Injection test variation #150
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>