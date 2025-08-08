<?php
// Command Injection test variation #701
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>