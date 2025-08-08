<?php
// Command Injection test variation #705
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>