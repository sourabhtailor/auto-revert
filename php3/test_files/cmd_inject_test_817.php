<?php
// Command Injection test variation #817
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>