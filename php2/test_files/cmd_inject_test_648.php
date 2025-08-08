<?php
// Command Injection test variation #648
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>