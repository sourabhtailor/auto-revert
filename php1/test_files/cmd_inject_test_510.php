<?php
// Command Injection test variation #510
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>