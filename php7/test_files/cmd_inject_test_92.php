<?php
// Command Injection test variation #92
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>