<?php
// Command Injection test variation #1486
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>