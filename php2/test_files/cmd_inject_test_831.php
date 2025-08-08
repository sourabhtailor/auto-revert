<?php
// Command Injection test variation #831
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>