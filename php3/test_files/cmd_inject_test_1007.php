<?php
// Command Injection test variation #1007
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>