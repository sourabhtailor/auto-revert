<?php
// Command Injection test variation #943
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>