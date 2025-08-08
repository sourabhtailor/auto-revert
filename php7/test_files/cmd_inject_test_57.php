<?php
// Command Injection test variation #57
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>