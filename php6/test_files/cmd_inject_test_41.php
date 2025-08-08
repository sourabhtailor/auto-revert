<?php
// Command Injection test variation #41
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>