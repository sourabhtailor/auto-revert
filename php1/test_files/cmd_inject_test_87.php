<?php
// Command Injection test variation #87
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>