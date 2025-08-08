<?php
// Command Injection test variation #681
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>