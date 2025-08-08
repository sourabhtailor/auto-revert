<?php
// Command Injection test variation #671
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>