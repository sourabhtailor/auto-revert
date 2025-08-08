<?php
// Command Injection test variation #722
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>