<?php
// Command Injection test variation #553
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>