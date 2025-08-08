<?php
// Command Injection test variation #930
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>