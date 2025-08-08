<?php
// Command Injection test variation #62
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>